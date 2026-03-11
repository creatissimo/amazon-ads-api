<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBKeywordsPricing
{
    public function __construct(
        private SBAdvertisingDealPrice $price,
        private array $validKeywords,
    ) {
    }

    public function getPrice(): SBAdvertisingDealPrice
    {
        return $this->price;
    }

    public function setPrice(SBAdvertisingDealPrice $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getValidKeywords(): array
    {
        return $this->validKeywords;
    }

    public function setValidKeywords(array $validKeywords): self
    {
        $this->validKeywords = $validKeywords;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'price' => $this->price->toArray(),
            'validKeywords' => $this->validKeywords,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            price: SBAdvertisingDealPrice::fromArray($data['price']),
            validKeywords: $data['validKeywords'],
        );
    }
}
