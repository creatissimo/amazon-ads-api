<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Auth;

use RuntimeException;

final class OAuthClient
{
    private const AUTHORIZATION_URL = 'https://www.amazon.com/ap/oa';
    private const TOKEN_URL         = 'https://api.amazon.com/auth/o2/token';
    private const CACHE_KEY_PREFIX  = 'amazon_ads_token_';

    private ?string $accessToken = null;
    private ?int    $expiresAt   = null;

    public function __construct(
        private readonly string               $clientId,
        private readonly string               $clientSecret,
        private readonly string               $redirectUri,
        private ?string                       $refreshToken = null,
        private readonly string               $scope = 'advertising::campaign_management',
        private readonly ?TokenCacheInterface $tokenCache = null,
    ) {
    }

    public function getAuthorizationUrl(string $state = ''): string
    {
        $params = [
            'client_id'     => $this->clientId,
            'scope'         => $this->scope,
            'response_type' => 'code',
            'redirect_uri'  => $this->redirectUri,
        ];

        if ($state !== '') {
            $params['state'] = $state;
        }

        return self::AUTHORIZATION_URL . '?' . http_build_query($params);
    }

    public function exchangeAuthorizationCode(string $code): array
    {
        $response = $this->requestToken([
            'grant_type'    => 'authorization_code',
            'code'          => $code,
            'redirect_uri'  => $this->redirectUri,
            'client_id'     => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);

        $this->applyTokenResponse($response);
        $this->storeToCache();

        return $response;
    }

    public function refreshAccessToken(): array
    {
        if ($this->refreshToken === null) {
            throw new RuntimeException('No refresh token available');
        }

        $response = $this->requestToken([
            'grant_type'    => 'refresh_token',
            'refresh_token' => $this->refreshToken,
            'client_id'     => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);

        $this->applyTokenResponse($response);
        $this->storeToCache();

        return $response;
    }

    public function getAccessToken(): string
    {
        if ($this->accessToken === null) {
            $this->loadFromCache();
        }

        if ($this->accessToken === null || $this->isTokenExpired()) {
            $this->refreshAccessToken();
        }

        if ($this->accessToken === null) {
            throw new RuntimeException('No access token available. Call exchangeAuthorizationCode() or setTokens() first');
        }

        return $this->accessToken;
    }

    public function setTokens(?string $accessToken = null, ?string $refreshToken = null, ?int $expiresAt = null): void
    {
        $this->accessToken  = $accessToken;
        $this->refreshToken = $refreshToken;
        $this->expiresAt    = $expiresAt;

        $this->storeToCache();
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function isTokenExpired(): bool
    {
        if ($this->expiresAt === null) {
            return false;
        }

        return time() >= ($this->expiresAt - 60);
    }

    private function requestToken(array $params): array
    {
        $ch = curl_init(self::TOKEN_URL);

        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($params),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
            CURLOPT_TIMEOUT        => 30,
        ]);

        $body     = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error    = curl_error($ch);
        curl_close($ch);

        if ($body === false) {
            throw new RuntimeException('Token request failed: ' . $error);
        }

        $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);

        if ($httpCode !== 200) {
            $message = $data['error_description'] ?? $data['error'] ?? 'Unknown error';
            throw new RuntimeException("Token request failed ({$httpCode}): {$message}");
        }

        return $data;
    }

    private function applyTokenResponse(array $response): void
    {
        $this->accessToken  = $response['access_token'] ?? throw new RuntimeException('Missing access_token in response');
        $this->refreshToken = $response['refresh_token'] ?? $this->refreshToken;

        if (isset($response['expires_in'])) {
            $this->expiresAt = time() + (int) $response['expires_in'];
        }
    }

    private function cacheKey(): string
    {
        return self::CACHE_KEY_PREFIX . $this->clientId;
    }

    private function storeToCache(): void
    {
        if ($this->tokenCache === null || $this->accessToken === null) {
            return;
        }

        $ttl = $this->expiresAt !== null
            ? max(1, $this->expiresAt - time())
            : 3600;

        $this->tokenCache->set($this->cacheKey(), [
            'access_token'  => $this->accessToken,
            'refresh_token' => $this->refreshToken,
            'expires_at'    => $this->expiresAt,
        ], $ttl);
    }

    private function loadFromCache(): void
    {
        if ($this->tokenCache === null) {
            return;
        }

        $cached = $this->tokenCache->get($this->cacheKey());

        if ($cached === null) {
            return;
        }

        $this->accessToken  = $cached['access_token'] ?? null;
        $this->refreshToken = $cached['refresh_token'] ?? $this->refreshToken;
        $this->expiresAt    = $cached['expires_at'] ?? null;
    }

    public function clearCachedTokens(): void
    {
        $this->tokenCache?->delete($this->cacheKey());
    }
}
