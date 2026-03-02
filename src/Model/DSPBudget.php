<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPBudget
{
    public function __construct(
        private DSPBudgetValue $budgetValue,
    ) {
    }

    public function getBudgetValue(): DSPBudgetValue
    {
        return $this->budgetValue;
    }

    public function setBudgetValue(DSPBudgetValue $budgetValue): self
    {
        $this->budgetValue = $budgetValue;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetValue: DSPBudgetValue::fromArray($data['budgetValue']),
        );
    }
}
