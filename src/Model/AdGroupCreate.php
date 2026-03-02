<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupCreate
{
    public function __construct(
        private string $campaignId,
        private string $name,
        private AdProduct $adProduct,
        private CreateState $state,
        private ?MarketplaceScope $marketplaceScope = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?string $purchaseOrderNumber = null,
        private array $bid = [],
        private array $budgets = [],
        private array $optimization = [],
        private array $pacing = [],
        private array $targetingSettings = [],
        private array $marketplaceConfigurations = [],
        private array $marketplaces = [],
        private array $advertisedProductCategoryIds = [],
        private array $tags = [],
    ) {
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setCampaignId(string $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAdProduct(): AdProduct
    {
        return $this->adProduct;
    }

    public function setAdProduct(AdProduct $adProduct): self
    {
        $this->adProduct = $adProduct;

        return $this;
    }

    public function getState(): CreateState
    {
        return $this->state;
    }

    public function setState(CreateState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getMarketplaceScope(): ?MarketplaceScope
    {
        return $this->marketplaceScope;
    }

    public function setMarketplaceScope(?MarketplaceScope $marketplaceScope): self
    {
        $this->marketplaceScope = $marketplaceScope;

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

    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    public function setMarketplaces(array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

        return $this;
    }

    public function getAdvertisedProductCategoryIds(): array
    {
        return $this->advertisedProductCategoryIds;
    }

    public function setAdvertisedProductCategoryIds(array $advertisedProductCategoryIds): self
    {
        $this->advertisedProductCategoryIds = $advertisedProductCategoryIds;

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
            'campaignId' => $this->campaignId,
            'name' => $this->name,
            'adProduct' => $this->adProduct->value,
            'state' => $this->state->value,
        ];

        if ($this->marketplaceScope !== null) {
            $data['marketplaceScope'] = $this->marketplaceScope->value;
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
        if ($this->marketplaces !== []) {
            $data['marketplaces'] = $this->marketplaces;
        }
        if ($this->advertisedProductCategoryIds !== []) {
            $data['advertisedProductCategoryIds'] = $this->advertisedProductCategoryIds;
        }
        if ($this->tags !== []) {
            $data['tags'] = $this->tags;
        }

        return $data;
    }
}
