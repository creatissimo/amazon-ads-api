<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BudgetValue
{
    public function __construct(
        private MonetaryBudgetValue $monetaryBudgetValue,
    ) {
    }

    public function getMonetaryBudgetValue(): MonetaryBudgetValue
    {
        return $this->monetaryBudgetValue;
    }

    public function setMonetaryBudgetValue(MonetaryBudgetValue $monetaryBudgetValue): self
    {
        $this->monetaryBudgetValue = $monetaryBudgetValue;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'monetaryBudgetValue' => $this->monetaryBudgetValue->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            monetaryBudgetValue: MonetaryBudgetValue::fromArray($data['monetaryBudgetValue']),
        );
    }
}

