<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MonetaryBudget
{
    public function __construct(
        private CurrencyCode $currencyCode,
        private float $value,
        private ?float $ruleValue = null,
    ) {
    }

    public function getCurrencyCode(): CurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(CurrencyCode $currencyCode): self
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

    public function getRuleValue(): ?float
    {
        return $this->ruleValue;
    }

    public function setRuleValue(?float $ruleValue): self
    {
        $this->ruleValue = $ruleValue;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'currencyCode' => $this->currencyCode->value,
            'value' => $this->value,
        ];

        if ($this->ruleValue !== null) {
            $data['ruleValue'] = $this->ruleValue;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            currencyCode: CurrencyCode::from($data['currencyCode']),
            value: (float) $data['value'],
            ruleValue: isset($data['ruleValue']) ? (float) $data['ruleValue'] : null,
        );
    }
}

