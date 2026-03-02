<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitmentSpendMultiStatusSuccess
{
    public function __construct(
        private DSPCommitmentSpend $commitmentSpend,
        private int $index,
    ) {
    }

    public function getCommitmentSpend(): DSPCommitmentSpend
    {
        return $this->commitmentSpend;
    }

    public function setCommitmentSpend(DSPCommitmentSpend $commitmentSpend): self
    {
        $this->commitmentSpend = $commitmentSpend;

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
            commitmentSpend: DSPCommitmentSpend::fromArray($data['commitmentSpend']),
            index: (int) $data['index'],
        );
    }
}
