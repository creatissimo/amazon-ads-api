<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateFlightBudget
{
    public function __construct(
        private BudgetType $budgetType,
        private CreateBudgetValue $budgetValue,
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

    public function getBudgetValue(): CreateBudgetValue
    {
        return $this->budgetValue;
    }

    public function setBudgetValue(CreateBudgetValue $budgetValue): self
    {
        $this->budgetValue = $budgetValue;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'budgetType' => $this->budgetType->value,
            'budgetValue' => $this->budgetValue->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetType: BudgetType::from($data['budgetType']),
            budgetValue: CreateBudgetValue::fromArray($data['budgetValue']),
        );
    }
}
