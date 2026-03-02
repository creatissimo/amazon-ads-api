<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateAdvertisingDealPrice
{
    public function __construct(
        private SBAdvertisingDealPriceType $priceType,
        private float $value,
    ) {
    }

    public function getPriceType(): SBAdvertisingDealPriceType
    {
        return $this->priceType;
    }

    public function setPriceType(SBAdvertisingDealPriceType $priceType): self
    {
        $this->priceType = $priceType;

        return $this;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            priceType: SBAdvertisingDealPriceType::from($data['priceType']),
            value: (float) $data['value'],
        );
    }
}
