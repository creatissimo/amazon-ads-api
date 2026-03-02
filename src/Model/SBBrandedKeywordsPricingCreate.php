<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandedKeywordsPricingCreate
{
    public function __construct(
        private string $endDateTime,
        private array $keywords,
        private string $startDateTime,
        private ?string $advertisingDealId = null,
    ) {
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

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function setKeywords(array $keywords): self
    {
        $this->keywords = $keywords;

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

    public function getAdvertisingDealId(): ?string
    {
        return $this->advertisingDealId;
    }

    public function setAdvertisingDealId(?string $advertisingDealId): self
    {
        $this->advertisingDealId = $advertisingDealId;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'endDateTime' => $this->endDateTime,
            'keywords' => $this->keywords,
            'startDateTime' => $this->startDateTime,
        ];

        if ($this->advertisingDealId !== null) {
            $data['advertisingDealId'] = $this->advertisingDealId;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            endDateTime: $data['endDateTime'],
            keywords: $data['keywords'],
            startDateTime: $data['startDateTime'],
            advertisingDealId: $data['advertisingDealId'] ?? null,
        );
    }
}
