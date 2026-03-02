<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdMultiStatusResponseWithPartialErrors
{
    public function __construct(
        private array $error = [],
        private array $partialSuccess = [],
        private array $success = [],
    ) {
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

    /** @return AdPartialIndex[] */
    public function getPartialSuccess(): array
    {
        return $this->partialSuccess;
    }

    /** @param AdPartialIndex[] $partialSuccess */
    public function setPartialSuccess(array $partialSuccess): self
    {
        $this->partialSuccess = $partialSuccess;

        return $this;
    }

    /** @return AdMultiStatusSuccess[] */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /** @param AdMultiStatusSuccess[] $success */
    public function setSuccess(array $success): self
    {
        $this->success = $success;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            error: array_map(
                static fn(array $v) => ErrorsIndex::fromArray($v),
                $data['error'] ?? [],
            ),
            partialSuccess: array_map(
                static fn(array $v) => AdPartialIndex::fromArray($v),
                $data['partialSuccess'] ?? [],
            ),
            success: array_map(
                static fn(array $v) => AdMultiStatusSuccess::fromArray($v),
                $data['success'] ?? [],
            ),
        );
    }
}
