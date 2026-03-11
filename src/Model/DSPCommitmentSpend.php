<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitmentSpend
{
    public function __construct(
        private string $accruedToDateTime,
        private DSPCommitmentSpendIdentifier $commitmentId,
        private DSPCurrencyCode $currencyCode,
        private DSPSpendDimensionType $spendDimensionType,
        private ?float $accruedSpendValue = null,
        private ?float $projectedSpendValue = null,
        private ?float $spendAtRiskValue = null,
    ) {
    }

    public function getAccruedToDateTime(): string
    {
        return $this->accruedToDateTime;
    }

    public function setAccruedToDateTime(string $accruedToDateTime): self
    {
        $this->accruedToDateTime = $accruedToDateTime;

        return $this;
    }

    public function getCommitmentId(): DSPCommitmentSpendIdentifier
    {
        return $this->commitmentId;
    }

    public function setCommitmentId(DSPCommitmentSpendIdentifier $commitmentId): self
    {
        $this->commitmentId = $commitmentId;

        return $this;
    }

    public function getCurrencyCode(): DSPCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(DSPCurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getSpendDimensionType(): DSPSpendDimensionType
    {
        return $this->spendDimensionType;
    }

    public function setSpendDimensionType(DSPSpendDimensionType $spendDimensionType): self
    {
        $this->spendDimensionType = $spendDimensionType;

        return $this;
    }

    public function getAccruedSpendValue(): ?float
    {
        return $this->accruedSpendValue;
    }

    public function setAccruedSpendValue(?float $accruedSpendValue): self
    {
        $this->accruedSpendValue = $accruedSpendValue;

        return $this;
    }

    public function getProjectedSpendValue(): ?float
    {
        return $this->projectedSpendValue;
    }

    public function setProjectedSpendValue(?float $projectedSpendValue): self
    {
        $this->projectedSpendValue = $projectedSpendValue;

        return $this;
    }

    public function getSpendAtRiskValue(): ?float
    {
        return $this->spendAtRiskValue;
    }

    public function setSpendAtRiskValue(?float $spendAtRiskValue): self
    {
        $this->spendAtRiskValue = $spendAtRiskValue;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'accruedToDateTime' => $this->accruedToDateTime,
            'commitmentId' => $this->commitmentId->toArray(),
            'currencyCode' => $this->currencyCode->value,
            'spendDimensionType' => $this->spendDimensionType->value,
        ];

        if ($this->accruedSpendValue !== null) {
            $data['accruedSpendValue'] = $this->accruedSpendValue;
        }
        if ($this->projectedSpendValue !== null) {
            $data['projectedSpendValue'] = $this->projectedSpendValue;
        }
        if ($this->spendAtRiskValue !== null) {
            $data['spendAtRiskValue'] = $this->spendAtRiskValue;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            accruedToDateTime: $data['accruedToDateTime'],
            commitmentId: DSPCommitmentSpendIdentifier::fromArray($data['commitmentId']),
            currencyCode: DSPCurrencyCode::from($data['currencyCode']),
            spendDimensionType: DSPSpendDimensionType::from($data['spendDimensionType']),
            accruedSpendValue: isset($data['accruedSpendValue']) ? (float) $data['accruedSpendValue'] : null,
            projectedSpendValue: isset($data['projectedSpendValue']) ? (float) $data['projectedSpendValue'] : null,
            spendAtRiskValue: isset($data['spendAtRiskValue']) ? (float) $data['spendAtRiskValue'] : null,
        );
    }
}
