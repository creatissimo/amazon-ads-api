<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class FlightBudget
{
    public function __construct(
        private BudgetType $budgetType,
        private BudgetValue $budgetValue,
    ) {
    }

    public function getBudgetType(): BudgetType
    {
        return $this->budgetType;
    }

    public function setBudgetType(BudgetType $budgetType): self
    {
        $this->budgetType = $budgetType;

        return $this;
    }

    public function getBudgetValue(): BudgetValue
    {
        return $this->budgetValue;
    }

    public function setBudgetValue(BudgetValue $budgetValue): self
    {
        $this->budgetValue = $budgetValue;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'budgetType' => $this->budgetType->value,
            'budgetValue' => $this->budgetValue->toArray(),
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetType: BudgetType::from($data['budgetType']),
            budgetValue: BudgetValue::fromArray($data['budgetValue']),
        );
    }
}
