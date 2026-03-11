<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandedKeywordsPricing
{
    public function __construct(
        private string $brandedKeywordsPricingId,
        private string $endDateTime,
        private array $keywords,
        private string $startDateTime,
        private ?string $advertisingDealId = null,
        private ?SBKeywordsPricing $keywordsPricing = null,
        private array $rejectedKeywords = [],
    ) {
    }

    public function getBrandedKeywordsPricingId(): string
    {
        return $this->brandedKeywordsPricingId;
    }

    public function setBrandedKeywordsPricingId(string $brandedKeywordsPricingId): self
    {
        $this->brandedKeywordsPricingId = $brandedKeywordsPricingId;

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

    public function getKeywordsPricing(): ?SBKeywordsPricing
    {
        return $this->keywordsPricing;
    }

    public function setKeywordsPricing(?SBKeywordsPricing $keywordsPricing): self
    {
        $this->keywordsPricing = $keywordsPricing;

        return $this;
    }

    /** @return SBRejectedKeyword[] */
    public function getRejectedKeywords(): array
    {
        return $this->rejectedKeywords;
    }

    /** @param SBRejectedKeyword[] $rejectedKeywords */
    public function setRejectedKeywords(array $rejectedKeywords): self
    {
        $this->rejectedKeywords = $rejectedKeywords;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'brandedKeywordsPricingId' => $this->brandedKeywordsPricingId,
            'endDateTime' => $this->endDateTime,
            'keywords' => $this->keywords,
            'startDateTime' => $this->startDateTime,
        ];

        if ($this->advertisingDealId !== null) {
            $data['advertisingDealId'] = $this->advertisingDealId;
        }
        if ($this->keywordsPricing !== null) {
            $data['keywordsPricing'] = $this->keywordsPricing->toArray();
        }
        if ($this->rejectedKeywords !== []) {
            $data['rejectedKeywords'] = array_map(
                static fn(SBRejectedKeyword $v) => $v->toArray(),
                $this->rejectedKeywords,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandedKeywordsPricingId: $data['brandedKeywordsPricingId'],
            endDateTime: $data['endDateTime'],
            keywords: $data['keywords'],
            startDateTime: $data['startDateTime'],
            advertisingDealId: $data['advertisingDealId'] ?? null,
            keywordsPricing: isset($data['keywordsPricing']) ? SBKeywordsPricing::fromArray($data['keywordsPricing']) : null,
            rejectedKeywords: array_map(
                static fn(array $v) => SBRejectedKeyword::fromArray($v),
                $data['rejectedKeywords'] ?? [],
            ),
        );
    }
}
