<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateOptimization
{
    public function __construct(
        private ?BidStrategy $bidStrategy = null,
        private ?UpdateAdGroupBudgetSettings $budgetSettings = null,
        private ?UpdateAdGroupGoalSettings $goalSettings = null,
    ) {
    }

    public function getBidStrategy(): ?BidStrategy
    {
        return $this->bidStrategy;
    }

    public function setBidStrategy(?BidStrategy $bidStrategy): self
    {
        $this->bidStrategy = $bidStrategy;

        return $this;
    }

    public function getBudgetSettings(): ?UpdateAdGroupBudgetSettings
    {
        return $this->budgetSettings;
    }

    public function setBudgetSettings(?UpdateAdGroupBudgetSettings $budgetSettings): self
    {
        $this->budgetSettings = $budgetSettings;

        return $this;
    }

    public function getGoalSettings(): ?UpdateAdGroupGoalSettings
    {
        return $this->goalSettings;
    }

    public function setGoalSettings(?UpdateAdGroupGoalSettings $goalSettings): self
    {
        $this->goalSettings = $goalSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->bidStrategy !== null) {
            $data['bidStrategy'] = $this->bidStrategy->value;
        }
        if ($this->budgetSettings !== null) {
            $data['budgetSettings'] = $this->budgetSettings->toArray();
        }
        if ($this->goalSettings !== null) {
            $data['goalSettings'] = $this->goalSettings->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            bidStrategy: isset($data['bidStrategy']) ? BidStrategy::from($data['bidStrategy']) : null,
            budgetSettings: isset($data['budgetSettings']) ? UpdateAdGroupBudgetSettings::fromArray($data['budgetSettings']) : null,
            goalSettings: isset($data['goalSettings']) ? UpdateAdGroupGoalSettings::fromArray($data['goalSettings']) : null,
        );
    }
}
