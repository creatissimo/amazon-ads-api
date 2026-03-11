<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealPrice
{
    public function __construct(
        private SBCurrencyCode $currencyCode,
        private SBAdvertisingDealPriceType $priceType,
        private float $value,
    ) {
    }

    public function getCurrencyCode(): SBCurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(SBCurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
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

    public function toArray(): array
    {
        $data = [
            'currencyCode' => $this->currencyCode->value,
            'priceType' => $this->priceType->value,
            'value' => $this->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            currencyCode: SBCurrencyCode::from($data['currencyCode']),
            priceType: SBAdvertisingDealPriceType::from($data['priceType']),
            value: (float) $data['value'],
        );
    }
}
