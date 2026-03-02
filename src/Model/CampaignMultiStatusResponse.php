<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignMultiStatusResponse
{
    /**
     * @param CampaignMultiStatusSuccess[] $success
     * @param CampaignPartialIndex[] $partialSuccess
     * @param ErrorsIndex[] $error
     */
    public function __construct(
        private array $success = [],
        private array $partialSuccess = [],
        private array $error = [],
    ) {
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
            success: array_map(
                static fn(array $s) => CampaignMultiStatusSuccess::fromArray($s),
                $data['success'] ?? [],
            ),
            partialSuccess: array_map(
                static fn(array $p) => CampaignPartialIndex::fromArray($p),
                $data['partialSuccess'] ?? [],
            ),
            error: array_map(
                static fn(array $e) => ErrorsIndex::fromArray($e),
                $data['error'] ?? [],
            ),
        );
    }
}
