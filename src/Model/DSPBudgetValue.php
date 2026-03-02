<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPBudgetValue
{
    public function __construct(
        private DSPMonetaryBudgetValue $monetaryBudgetValue,
    ) {
    }

    public function getMonetaryBudgetValue(): DSPMonetaryBudgetValue
    {
        return $this->monetaryBudgetValue;
    }

    public function setMonetaryBudgetValue(DSPMonetaryBudgetValue $monetaryBudgetValue): self
    {
        $this->monetaryBudgetValue = $monetaryBudgetValue;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            monetaryBudgetValue: DSPMonetaryBudgetValue::fromArray($data['monetaryBudgetValue']),
        );
    }
}

