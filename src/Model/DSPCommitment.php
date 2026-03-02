<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitment
{
    public function __construct(
        private string $commitmentId,
        private string $commitmentName,
        private float $committedSpend,
        private DSPCurrencyCode $currencyCode,
        private string $endDateTime,
        private DSPFulfillmentLevel $fulfillmentLevel,
        private DSPSpendCalculationMode $spendCalculationMode,
        private string $startDateTime,
        private array $advertiserIds = [],
        private array $campaignIds = [],
        private array $dealIds = [],
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

    public function getCommitmentName(): string
    {
        return $this->commitmentName;
    }

    public function setCommitmentName(string $commitmentName): self
    {
        $this->commitmentName = $commitmentName;

        return $this;
    }

    public function getCommittedSpend(): float
    {
        return $this->committedSpend;
    }

    public function setCommittedSpend(float $committedSpend): self
    {
        $this->committedSpend = $committedSpend;

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

    public function getEndDateTime(): string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getFulfillmentLevel(): DSPFulfillmentLevel
    {
        return $this->fulfillmentLevel;
    }

    public function setFulfillmentLevel(DSPFulfillmentLevel $fulfillmentLevel): self
    {
        $this->fulfillmentLevel = $fulfillmentLevel;

        return $this;
    }

    public function getSpendCalculationMode(): DSPSpendCalculationMode
    {
        return $this->spendCalculationMode;
    }

    public function setSpendCalculationMode(DSPSpendCalculationMode $spendCalculationMode): self
    {
        $this->spendCalculationMode = $spendCalculationMode;

        return $this;
    }

    public function getStartDateTime(): string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getAdvertiserIds(): array
    {
        return $this->advertiserIds;
    }

    public function setAdvertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;

        return $this;
    }

    public function getCampaignIds(): array
    {
        return $this->campaignIds;
    }

    public function setCampaignIds(array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;

        return $this;
    }

    public function getDealIds(): array
    {
        return $this->dealIds;
    }

    public function setDealIds(array $dealIds): self
    {
        $this->dealIds = $dealIds;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            commitmentId: $data['commitmentId'],
            commitmentName: $data['commitmentName'],
            committedSpend: (float) $data['committedSpend'],
            currencyCode: DSPCurrencyCode::from($data['currencyCode']),
            endDateTime: $data['endDateTime'],
            fulfillmentLevel: DSPFulfillmentLevel::from($data['fulfillmentLevel']),
            spendCalculationMode: DSPSpendCalculationMode::from($data['spendCalculationMode']),
            startDateTime: $data['startDateTime'],
            advertiserIds: $data['advertiserIds'] ?? [],
            campaignIds: $data['campaignIds'] ?? [],
            dealIds: $data['dealIds'] ?? [],
        );
    }
}
