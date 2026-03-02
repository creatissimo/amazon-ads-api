<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateOptimization
{
    public function __construct(
        private ?BidStrategy $bidStrategy = null,
        private ?CreateAdGroupBudgetSettings $budgetSettings = null,
        private ?CreateAdGroupGoalSettings $goalSettings = null,
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

    public function getBudgetSettings(): ?CreateAdGroupBudgetSettings
    {
        return $this->budgetSettings;
    }

    public function setBudgetSettings(?CreateAdGroupBudgetSettings $budgetSettings): self
    {
        $this->budgetSettings = $budgetSettings;

        return $this;
    }

    public function getGoalSettings(): ?CreateAdGroupGoalSettings
    {
        return $this->goalSettings;
    }

    public function setGoalSettings(?CreateAdGroupGoalSettings $goalSettings): self
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
            budgetSettings: isset($data['budgetSettings']) ? CreateAdGroupBudgetSettings::fromArray($data['budgetSettings']) : null,
            goalSettings: isset($data['goalSettings']) ? CreateAdGroupGoalSettings::fromArray($data['goalSettings']) : null,
        );
    }
}
