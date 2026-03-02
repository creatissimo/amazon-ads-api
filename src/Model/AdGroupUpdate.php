<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupUpdate
{
    public function __construct(
        private string $adGroupId,
        private ?string $name = null,
        private ?State $state = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?string $purchaseOrderNumber = null,
        private array $bid = [],
        private array $budgets = [],
        private array $optimization = [],
        private array $pacing = [],
        private array $targetingSettings = [],
        private array $marketplaceConfigurations = [],
        private array $tags = [],
    ) {
    }

    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    public function setAdGroupId(string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }

    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }

    public function getBid(): array
    {
        return $this->bid;
    }

    public function setBid(array $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    public function getBudgets(): array
    {
        return $this->budgets;
    }

    public function setBudgets(array $budgets): self
    {
        $this->budgets = $budgets;

        return $this;
    }

    public function getOptimization(): array
    {
        return $this->optimization;
    }

    public function setOptimization(array $optimization): self
    {
        $this->optimization = $optimization;

        return $this;
    }

    public function getPacing(): array
    {
        return $this->pacing;
    }

    public function setPacing(array $pacing): self
    {
        $this->pacing = $pacing;

        return $this;
    }

    public function getTargetingSettings(): array
    {
        return $this->targetingSettings;
    }

    public function setTargetingSettings(array $targetingSettings): self
    {
        $this->targetingSettings = $targetingSettings;

        return $this;
    }

    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    public function setMarketplaceConfigurations(array $marketplaceConfigurations): self
    {
        $this->marketplaceConfigurations = $marketplaceConfigurations;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adGroupId' => $this->adGroupId,
        ];

        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->purchaseOrderNumber !== null) {
            $data['purchaseOrderNumber'] = $this->purchaseOrderNumber;
        }
        if ($this->bid !== []) {
            $data['bid'] = $this->bid;
        }
        if ($this->budgets !== []) {
            $data['budgets'] = $this->budgets;
        }
        if ($this->optimization !== []) {
            $data['optimization'] = $this->optimization;
        }
        if ($this->pacing !== []) {
            $data['pacing'] = $this->pacing;
        }
        if ($this->targetingSettings !== []) {
            $data['targetingSettings'] = $this->targetingSettings;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = $this->marketplaceConfigurations;
        }
        if ($this->tags !== []) {
            $data['tags'] = $this->tags;
        }

        return $data;
    }
}

