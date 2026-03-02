<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitmentMultiStatusSuccess
{
    public function __construct(
        private DSPCommitment $commitment,
        private int $index,
    ) {
    }

    public function getCommitment(): DSPCommitment
    {
        return $this->commitment;
    }

    public function setCommitment(DSPCommitment $commitment): self
    {
        $this->commitment = $commitment;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            commitment: DSPCommitment::fromArray($data['commitment']),
            index: (int) $data['index'],
        );
    }
}
