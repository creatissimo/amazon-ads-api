<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignOptimizations
{
    public function __construct(
        private ?BidSettings $bidSettings = null,
        private ?BudgetSettings $budgetSettings = null,
        private ?GoalSettings $goalSettings = null,
        private array $primaryInventoryTypes = [],
    ) {
    }

    public function getBidSettings(): ?BidSettings
    {
        return $this->bidSettings;
    }

    public function setBidSettings(?BidSettings $bidSettings): self
    {
        $this->bidSettings = $bidSettings;

        return $this;
    }

    public function getBudgetSettings(): ?BudgetSettings
    {
        return $this->budgetSettings;
    }

    public function setBudgetSettings(?BudgetSettings $budgetSettings): self
    {
        $this->budgetSettings = $budgetSettings;

        return $this;
    }

    public function getGoalSettings(): ?GoalSettings
    {
        return $this->goalSettings;
    }

    public function setGoalSettings(?GoalSettings $goalSettings): self
    {
        $this->goalSettings = $goalSettings;

        return $this;
    }

    /** @return PrimaryInventoryType[] */
    public function getPrimaryInventoryTypes(): array
    {
        return $this->primaryInventoryTypes;
    }

    /** @param PrimaryInventoryType[] $primaryInventoryTypes */
    public function setPrimaryInventoryTypes(array $primaryInventoryTypes): self
    {
        $this->primaryInventoryTypes = $primaryInventoryTypes;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->bidSettings !== null) {
            $data['bidSettings'] = $this->bidSettings->toArray();
        }
        if ($this->budgetSettings !== null) {
            $data['budgetSettings'] = $this->budgetSettings->toArray();
        }
        if ($this->goalSettings !== null) {
            $data['goalSettings'] = $this->goalSettings->toArray();
        }
        if ($this->primaryInventoryTypes !== []) {
            $data['primaryInventoryTypes'] = array_map(
                static fn(PrimaryInventoryType $v) => $v->value,
                $this->primaryInventoryTypes,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            bidSettings: isset($data['bidSettings']) ? BidSettings::fromArray($data['bidSettings']) : null,
            budgetSettings: isset($data['budgetSettings']) ? BudgetSettings::fromArray($data['budgetSettings']) : null,
            goalSettings: isset($data['goalSettings']) ? GoalSettings::fromArray($data['goalSettings']) : null,
            primaryInventoryTypes: array_map(
                static fn(string $v) => PrimaryInventoryType::from($v),
                $data['primaryInventoryTypes'] ?? [],
            ),
        );
    }
}
