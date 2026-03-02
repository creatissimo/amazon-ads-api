<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitmentUpdate
{
    public function __construct(
        private string $commitmentId,
        private array $advertiserIds = [],
        private array $campaignIds = [],
        private ?string $commitmentName = null,
        private ?float $committedSpend = null,
        private ?DSPCurrencyCode $currencyCode = null,
        private array $dealIds = [],
        private ?string $endDateTime = null,
        private ?DSPFulfillmentLevel $fulfillmentLevel = null,
        private ?DSPSpendCalculationMode $spendCalculationMode = null,
        private ?string $startDateTime = null,
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

    public function getCommitmentName(): ?string
    {
        return $this->commitmentName;
    }

    public function setCommitmentName(?string $commitmentName): self
    {
        $this->commitmentName = $commitmentName;

        return $this;
    }

    public function getCommittedSpend(): ?float
    {
        return $this->committedSpend;
    }

    public function setCommittedSpend(?float $committedSpend): self
    {
        $this->committedSpend = $committedSpend;

        return $this;
    }

    public function getCurrencyCode(): ?DSPCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?DSPCurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

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

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getFulfillmentLevel(): ?DSPFulfillmentLevel
    {
        return $this->fulfillmentLevel;
    }

    public function setFulfillmentLevel(?DSPFulfillmentLevel $fulfillmentLevel): self
    {
        $this->fulfillmentLevel = $fulfillmentLevel;

        return $this;
    }

    public function getSpendCalculationMode(): ?DSPSpendCalculationMode
    {
        return $this->spendCalculationMode;
    }

    public function setSpendCalculationMode(?DSPSpendCalculationMode $spendCalculationMode): self
    {
        $this->spendCalculationMode = $spendCalculationMode;

        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'commitmentId' => $this->commitmentId,
        ];

        if ($this->advertiserIds !== []) {
            $data['advertiserIds'] = $this->advertiserIds;
        }
        if ($this->campaignIds !== []) {
            $data['campaignIds'] = $this->campaignIds;
        }
        if ($this->commitmentName !== null) {
            $data['commitmentName'] = $this->commitmentName;
        }
        if ($this->committedSpend !== null) {
            $data['committedSpend'] = $this->committedSpend;
        }
        if ($this->currencyCode !== null) {
            $data['currencyCode'] = $this->currencyCode->value;
        }
        if ($this->dealIds !== []) {
            $data['dealIds'] = $this->dealIds;
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->fulfillmentLevel !== null) {
            $data['fulfillmentLevel'] = $this->fulfillmentLevel->value;
        }
        if ($this->spendCalculationMode !== null) {
            $data['spendCalculationMode'] = $this->spendCalculationMode->value;
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            commitmentId: $data['commitmentId'],
            advertiserIds: $data['advertiserIds'] ?? [],
            campaignIds: $data['campaignIds'] ?? [],
            commitmentName: $data['commitmentName'] ?? null,
            committedSpend: isset($data['committedSpend']) ? (float) $data['committedSpend'] : null,
            currencyCode: isset($data['currencyCode']) ? DSPCurrencyCode::from($data['currencyCode']) : null,
            dealIds: $data['dealIds'] ?? [],
            endDateTime: $data['endDateTime'] ?? null,
            fulfillmentLevel: isset($data['fulfillmentLevel']) ? DSPFulfillmentLevel::from($data['fulfillmentLevel']) : null,
            spendCalculationMode: isset($data['spendCalculationMode']) ? DSPSpendCalculationMode::from($data['spendCalculationMode']) : null,
            startDateTime: $data['startDateTime'] ?? null,
        );
    }
}
