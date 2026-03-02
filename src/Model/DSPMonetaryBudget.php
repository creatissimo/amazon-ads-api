<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPMonetaryBudget
{
    public function __construct(
        private DSPCurrencyCode $currencyCode,
        private float $value,
    ) {
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
            currencyCode: DSPCurrencyCode::from($data['currencyCode']),
            value: (float) $data['value'],
        );
    }
}
