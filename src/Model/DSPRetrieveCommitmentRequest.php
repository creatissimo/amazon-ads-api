<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPRetrieveCommitmentRequest
{
    public function __construct(
        private array $commitmentIds = [],
    ) {
    }

    public function getCommitmentIds(): array
    {
        return $this->commitmentIds;
    }

    public function setCommitmentIds(array $commitmentIds): self
    {
        $this->commitmentIds = $commitmentIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->commitmentIds !== []) {
            $data['commitmentIds'] = $this->commitmentIds;
        }

        return $data;
    }
}
