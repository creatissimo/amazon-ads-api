<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPBudget
{
    public function __construct(
        private mixed $budgetValue,
    ) {
    }

    public function getBudgetValue(): mixed
    {
        return $this->budgetValue;
    }

    public function setBudgetValue(mixed $budgetValue): self
    {
        $this->budgetValue = $budgetValue;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetValue: $data['budgetValue'],
        );
    }
}
