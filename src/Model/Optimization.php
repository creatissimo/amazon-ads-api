<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Optimization
{
    public function __construct(
        private ?BidStrategy $bidStrategy = null,
        private ?AdGroupBudgetSettings $budgetSettings = null,
        private ?AdGroupGoalSettings $goalSettings = null,
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

    public function getBudgetSettings(): ?AdGroupBudgetSettings
    {
        return $this->budgetSettings;
    }

    public function setBudgetSettings(?AdGroupBudgetSettings $budgetSettings): self
    {
        $this->budgetSettings = $budgetSettings;

        return $this;
    }

    public function getGoalSettings(): ?AdGroupGoalSettings
    {
        return $this->goalSettings;
    }

    public function setGoalSettings(?AdGroupGoalSettings $goalSettings): self
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
            budgetSettings: isset($data['budgetSettings']) ? AdGroupBudgetSettings::fromArray($data['budgetSettings']) : null,
            goalSettings: isset($data['goalSettings']) ? AdGroupGoalSettings::fromArray($data['goalSettings']) : null,
        );
    }
}
