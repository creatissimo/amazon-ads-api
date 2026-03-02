<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Budget
{
    public function __construct(
        private BudgetType $budgetType,
        private float $budgetValue,
        private Recurrence $recurrenceTimePeriod,
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

    public function getBudgetValue(): float
    {
        return $this->budgetValue;
    }

    public function setBudgetValue(float $budgetValue): self
    {
        $this->budgetValue = $budgetValue;

        return $this;
    }

    public function getRecurrenceTimePeriod(): Recurrence
    {
        return $this->recurrenceTimePeriod;
    }

    public function setRecurrenceTimePeriod(Recurrence $recurrenceTimePeriod): self
    {
        $this->recurrenceTimePeriod = $recurrenceTimePeriod;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'budgetType' => $this->budgetType->value,
            'budgetValue' => [
                'monetaryBudgetValue' => [
                    'monetaryBudget' => $this->budgetValue,
                ],
            ],
            'recurrenceTimePeriod' => $this->recurrenceTimePeriod->value,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetType: BudgetType::from($data['budgetType']),
            budgetValue: (float) ($data['budgetValue']['monetaryBudgetValue']['monetaryBudget'] ?? 0),
            recurrenceTimePeriod: Recurrence::from($data['recurrenceTimePeriod']),
        );
    }
}
