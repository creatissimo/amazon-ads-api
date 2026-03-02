<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCreateCommitmentRequest
{
    public function __construct(
        private array $commitments = [],
    ) {
    }

    /** @return DSPCommitmentCreate[] */
    public function getCommitments(): array
    {
        return $this->commitments;
    }

    /** @param DSPCommitmentCreate[] $commitments */
    public function setCommitments(array $commitments): self
    {
        $this->commitments = $commitments;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->commitments !== []) {
            $data['commitments'] = array_map(
                static fn(DSPCommitmentCreate $v) => $v->toArray(),
                $this->commitments,
            );
        }

        return $data;
    }
}
