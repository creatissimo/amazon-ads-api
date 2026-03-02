<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Http;

use RuntimeException;

final class AmazonAdsApiException extends RuntimeException
{
    public function __construct(
        private readonly int $httpStatusCode,
        private readonly ?string $responseCode,
        private readonly ?string $responseMessage,
        private readonly array $responseBody,
    ) {
        $parts = ["HTTP {$this->httpStatusCode}"];

        if ($this->responseCode !== null) {
            $parts[] = "[{$this->responseCode}]";
        }

        if ($this->responseMessage !== null) {
            $parts[] = $this->responseMessage;
        }

        parent::__construct(implode(' ', $parts), $this->httpStatusCode);
    }

    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function getResponseMessage(): ?string
    {
        return $this->responseMessage;
    }

    public function getResponseBody(): array
    {
        return $this->responseBody;
    }

    public static function fromResponse(ApiResponse $response): self
    {
        $data = $response->getData();

        return new self(
            httpStatusCode: $response->getStatusCode(),
            responseCode: $data['code'] ?? null,
            responseMessage: $data['message'] ?? null,
            responseBody: $data,
        );
    }
}

