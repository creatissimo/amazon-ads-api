<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupBudgetSettings
{
    public function __construct(
        private ?BudgetAllocation $budgetAllocation = null,
        private ?float $dailyMinSpendValue = null,
    ) {
    }

    public function getBudgetAllocation(): ?BudgetAllocation
    {
        return $this->budgetAllocation;
    }

    public function setBudgetAllocation(?BudgetAllocation $budgetAllocation): self
    {
        $this->budgetAllocation = $budgetAllocation;

        return $this;
    }

    public function getDailyMinSpendValue(): ?float
    {
        return $this->dailyMinSpendValue;
    }

    public function setDailyMinSpendValue(?float $dailyMinSpendValue): self
    {
        $this->dailyMinSpendValue = $dailyMinSpendValue;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetAllocation: isset($data['budgetAllocation']) ? BudgetAllocation::from($data['budgetAllocation']) : null,
            dailyMinSpendValue: isset($data['dailyMinSpendValue']) ? (float) $data['dailyMinSpendValue'] : null,
        );
    }
}
