<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateCampaignOptimizations
{
    public function __construct(
        private ?CreateBidSettings $bidSettings = null,
        private ?CreateBudgetSettings $budgetSettings = null,
        private ?CreateGoalSettings $goalSettings = null,
        private array $primaryInventoryTypes = [],
    ) {
    }

    public function getBidSettings(): ?CreateBidSettings
    {
        return $this->bidSettings;
    }

    public function setBidSettings(?CreateBidSettings $bidSettings): self
    {
        $this->bidSettings = $bidSettings;

        return $this;
    }

    public function getBudgetSettings(): ?CreateBudgetSettings
    {
        return $this->budgetSettings;
    }

    public function setBudgetSettings(?CreateBudgetSettings $budgetSettings): self
    {
        $this->budgetSettings = $budgetSettings;

        return $this;
    }

    public function getGoalSettings(): ?CreateGoalSettings
    {
        return $this->goalSettings;
    }

    public function setGoalSettings(?CreateGoalSettings $goalSettings): self
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
            bidSettings: isset($data['bidSettings']) ? CreateBidSettings::fromArray($data['bidSettings']) : null,
            budgetSettings: isset($data['budgetSettings']) ? CreateBudgetSettings::fromArray($data['budgetSettings']) : null,
            goalSettings: isset($data['goalSettings']) ? CreateGoalSettings::fromArray($data['goalSettings']) : null,
            primaryInventoryTypes: array_map(
                static fn(string $v) => PrimaryInventoryType::from($v),
                $data['primaryInventoryTypes'] ?? [],
            ),
        );
    }
}
