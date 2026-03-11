<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitmentSpendIdentifier
{
    public function __construct(
        private string $commitmentId,
        private mixed $spendDimension = null,
    ) {
    }

    public function getCommitmentId(): string
    {
        return $this->commitmentId;
    }

    public function setCommitmentId(string $commitmentId): self
    {
        $this->commitmentId = $commitmentId;

        return $this;
    }

    public function getSpendDimension(): mixed
    {
        return $this->spendDimension;
    }

    public function setSpendDimension(mixed $spendDimension): self
    {
        $this->spendDimension = $spendDimension;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'commitmentId' => $this->commitmentId,
        ];

        if ($this->spendDimension !== null) {
            $data['spendDimension'] = $this->spendDimension;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            commitmentId: $data['commitmentId'],
            spendDimension: $data['spendDimension'] ?? null,
        );
    }
}
