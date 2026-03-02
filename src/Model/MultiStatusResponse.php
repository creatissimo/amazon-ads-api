<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MultiStatusResponse
{
    /**
     * @param array[] $success
     * @param array[] $partialSuccess
     * @param ErrorsIndex[] $error
     */
    public function __construct(
        private array $success = [],
        private array $partialSuccess = [],
        private array $error = [],
    ) {
    }

    public function getSuccess(): array
    {
        return $this->success;
    }

    public function setSuccess(array $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getPartialSuccess(): array
    {
        return $this->partialSuccess;
    }

    public function setPartialSuccess(array $partialSuccess): self
    {
        $this->partialSuccess = $partialSuccess;

        return $this;
    }

    /** @return ErrorsIndex[] */
    public function getError(): array
    {
        return $this->error;
    }

    /** @param ErrorsIndex[] $error */
    public function setError(array $error): self
    {
        $this->error = $error;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            success: $data['success'] ?? [],
            partialSuccess: $data['partialSuccess'] ?? [],
            error: array_map(
                static fn(array $e) => ErrorsIndex::fromArray($e),
                $data['error'] ?? [],
            ),
        );
    }
}

