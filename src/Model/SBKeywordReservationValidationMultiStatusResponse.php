<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBKeywordReservationValidationMultiStatusResponse
{
    public function __construct(
        private array $error = [],
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

    /** @return SBKeywordReservationValidationMultiStatusSuccess[] */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /** @param SBKeywordReservationValidationMultiStatusSuccess[] $success */
    public function setSuccess(array $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->error !== []) {
            $data['error'] = array_map(
                static fn(ErrorsIndex $v) => $v->toArray(),
                $this->error,
            );
        }
        if ($this->success !== []) {
            $data['success'] = array_map(
                static fn(SBKeywordReservationValidationMultiStatusSuccess $v) => $v->toArray(),
                $this->success,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            error: array_map(
                static fn(array $v) => ErrorsIndex::fromArray($v),
                $data['error'] ?? [],
            ),
            success: array_map(
                static fn(array $v) => SBKeywordReservationValidationMultiStatusSuccess::fromArray($v),
                $data['success'] ?? [],
            ),
        );
    }
}
