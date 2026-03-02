<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPRetrieveCommitmentSpendRequest
{
    public function __construct(
        private array $commitmentIds = [],
    ) {
    }

    /** @return DSPCommitmentSpendIdentifier[] */
    public function getCommitmentIds(): array
    {
        return $this->commitmentIds;
    }

    /** @param DSPCommitmentSpendIdentifier[] $commitmentIds */
    public function setCommitmentIds(array $commitmentIds): self
    {
        $this->commitmentIds = $commitmentIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->commitmentIds !== []) {
            $data['commitmentIds'] = array_map(
                static fn(DSPCommitmentSpendIdentifier $v) => $v->toArray(),
                $this->commitmentIds,
            );
        }

        return $data;
    }
}
