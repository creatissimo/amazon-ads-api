<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Http;

use Creatissimo\AmazonAdsApi\Auth\OAuthClient;
use RuntimeException;

final class HttpClient
{
    public const REGION_NA = 'https://advertising-api.amazon.com';
    public const REGION_EU = 'https://advertising-api-eu.amazon.com';
    public const REGION_FE = 'https://advertising-api-fe.amazon.com';

    private const RETRYABLE_STATUS_CODES = [429, 504];
    private const UNAUTHORIZED_STATUS_CODE = 401;

    public function __construct(
        private readonly OAuthClient $oauthClient,
        private readonly string $clientId,
        private readonly string $baseUrl = self::REGION_EU,
        private readonly ?string $accountId = null,
        private readonly ?string $profileId = null,
        private readonly int $maxRetries = 3,
        private readonly float $retryBaseDelay = 1.0,
    ) {
    }

    public function post(string $path, array $body = []): ApiResponse
    {
        return $this->requestWithRetry('POST', $path, $body);
    }

    public function get(string $path): ApiResponse
    {
        return $this->requestWithRetry('GET', $path);
    }

    private function requestWithRetry(string $method, string $path, ?array $body = null): ApiResponse
    {
        $attempt = 0;
        $tokenRefreshed = false;

        while (true) {
            $response = $this->request($method, $path, $body);
            $statusCode = $response->getStatusCode();

            if ($statusCode === self::UNAUTHORIZED_STATUS_CODE && !$tokenRefreshed) {
                $this->oauthClient->refreshAccessToken();
                $tokenRefreshed = true;
                continue;
            }

            if (in_array($statusCode, self::RETRYABLE_STATUS_CODES, true) && $attempt < $this->maxRetries) {
                $delay = $this->retryBaseDelay * (2 ** $attempt);
                usleep((int) ($delay * 1_000_000));
                $attempt++;
                continue;
            }

            return $response;
        }
    }

    private function request(string $method, string $path, ?array $body = null): ApiResponse
    {
        $url = rtrim($this->baseUrl, '/') . '/' . ltrim($path, '/');
        $ch = curl_init($url);

        $headers = [
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $this->oauthClient->getAccessToken(),
            'Amazon-Ads-ClientId: ' . $this->clientId,
        ];

        if ($this->accountId !== null) {
            $headers[] = 'Amazon-Ads-AccountId: ' . $this->accountId;
        }

        if ($this->profileId !== null) {
            $headers[] = 'Amazon-Advertising-API-Scope: ' . $this->profileId;
        }

        $options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_CUSTOMREQUEST => $method,
        ];

        if ($body !== null && $method === 'POST') {
            $options[CURLOPT_POSTFIELDS] = json_encode($body, JSON_THROW_ON_ERROR);
        }

        curl_setopt_array($ch, $options);

        $responseBody = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($responseBody === false) {
            throw new RuntimeException('HTTP request failed: ' . $error);
        }

        $data = json_decode($responseBody, true, 512, JSON_THROW_ON_ERROR);

        return new ApiResponse($httpCode, $data);
    }
}
