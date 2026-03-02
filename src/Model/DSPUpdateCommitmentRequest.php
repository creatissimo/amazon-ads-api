<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPUpdateCommitmentRequest
{
    public function __construct(
        private array $commitments = [],
    ) {
    }

    /** @return DSPCommitmentUpdate[] */
    public function getCommitments(): array
    {
        return $this->commitments;
    }

    /** @param DSPCommitmentUpdate[] $commitments */
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
                static fn(DSPCommitmentUpdate $v) => $v->toArray(),
                $this->commitments,
            );
        }

        return $data;
    }
}
