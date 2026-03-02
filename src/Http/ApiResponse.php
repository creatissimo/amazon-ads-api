<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Http;

final class ApiResponse
{
    public function __construct(
        private int $statusCode,
        private array $data,
    ) {
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function isSuccess(): bool
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }

    public function isMultiStatus(): bool
    {
        return $this->statusCode === 207;
    }

    public function ensureSuccess(): self
    {
        if (!$this->isSuccess()) {
            throw AmazonAdsApiException::fromResponse($this);
        }

        return $this;
    }

    public function ensureMultiStatus(): self
    {
        if (!$this->isMultiStatus()) {
            throw AmazonAdsApiException::fromResponse($this);
        }

        return $this;
    }
}
