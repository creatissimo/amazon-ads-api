<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateBudget
{
    public function __construct(
        private BudgetType $budgetType,
        private mixed $budgetValue,
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

    public function getBudgetValue(): mixed
    {
        return $this->budgetValue;
    }

    public function setBudgetValue(mixed $budgetValue): self
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
        $data = [
            'budgetType' => $this->budgetType->value,
            'budgetValue' => $this->budgetValue,
            'recurrenceTimePeriod' => $this->recurrenceTimePeriod->value,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetType: BudgetType::from($data['budgetType']),
            budgetValue: $data['budgetValue'],
            recurrenceTimePeriod: Recurrence::from($data['recurrenceTimePeriod']),
        );
    }
}
