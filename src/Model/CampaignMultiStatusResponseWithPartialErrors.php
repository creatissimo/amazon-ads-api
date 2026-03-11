<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignMultiStatusResponseWithPartialErrors
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

    /** @return CampaignPartialIndex[] */
    public function getPartialSuccess(): array
    {
        return $this->partialSuccess;
    }

    /** @param CampaignPartialIndex[] $partialSuccess */
    public function setPartialSuccess(array $partialSuccess): self
    {
        $this->partialSuccess = $partialSuccess;

        return $this;
    }

    /** @return CampaignMultiStatusSuccess[] */
    public function getSuccess(): array
    {
        return $this->success;
    }

    /** @param CampaignMultiStatusSuccess[] $success */
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
        if ($this->partialSuccess !== []) {
            $data['partialSuccess'] = array_map(
                static fn(CampaignPartialIndex $v) => $v->toArray(),
                $this->partialSuccess,
            );
        }
        if ($this->success !== []) {
            $data['success'] = array_map(
                static fn(CampaignMultiStatusSuccess $v) => $v->toArray(),
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
            partialSuccess: array_map(
                static fn(array $v) => CampaignPartialIndex::fromArray($v),
                $data['partialSuccess'] ?? [],
            ),
            success: array_map(
                static fn(array $v) => CampaignMultiStatusSuccess::fromArray($v),
                $data['success'] ?? [],
            ),
        );
    }
}
