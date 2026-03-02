<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroup
{
    public function __construct(
        private string $adGroupId,
        private string $campaignId,
        private string $name,
        private AdProduct $adProduct,
        private State $state,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private ?MarketplaceScope $marketplaceScope = null,
        private ?string $globalAdGroupId = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?string $purchaseOrderNumber = null,
        private array $bid = [],
        private array $budgets = [],
        private array $fees = [],
        private array $frequencies = [],
        private array $optimization = [],
        private array $pacing = [],
        private array $targetingSettings = [],
        private array $marketplaceConfigurations = [],
        private array $marketplaces = [],
        private array $advertisedProductCategoryIds = [],
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

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCreationDateTime(): string
    {
        return $this->creationDateTime;
    }

    public function setCreationDateTime(string $creationDateTime): self
    {
        $this->creationDateTime = $creationDateTime;

        return $this;
    }

    public function getLastUpdatedDateTime(): string
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(string $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;

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

    public function getGlobalAdGroupId(): ?string
    {
        return $this->globalAdGroupId;
    }

    public function setGlobalAdGroupId(?string $globalAdGroupId): self
    {
        $this->globalAdGroupId = $globalAdGroupId;

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

    public function getFees(): array
    {
        return $this->fees;
    }

    public function setFees(array $fees): self
    {
        $this->fees = $fees;

        return $this;
    }

    public function getFrequencies(): array
    {
        return $this->frequencies;
    }

    public function setFrequencies(array $frequencies): self
    {
        $this->frequencies = $frequencies;

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

    public static function fromArray(array $data): self
    {
        return new self(
            adGroupId: $data['adGroupId'],
            campaignId: $data['campaignId'],
            name: $data['name'],
            adProduct: AdProduct::from($data['adProduct']),
            state: State::from($data['state']),
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            globalAdGroupId: $data['globalAdGroupId'] ?? null,
            startDateTime: $data['startDateTime'] ?? null,
            endDateTime: $data['endDateTime'] ?? null,
            purchaseOrderNumber: $data['purchaseOrderNumber'] ?? null,
            bid: $data['bid'] ?? [],
            budgets: $data['budgets'] ?? [],
            fees: $data['fees'] ?? [],
            frequencies: $data['frequencies'] ?? [],
            optimization: $data['optimization'] ?? [],
            pacing: $data['pacing'] ?? [],
            targetingSettings: $data['targetingSettings'] ?? [],
            marketplaceConfigurations: $data['marketplaceConfigurations'] ?? [],
            marketplaces: $data['marketplaces'] ?? [],
            advertisedProductCategoryIds: $data['advertisedProductCategoryIds'] ?? [],
            tags: $data['tags'] ?? [],
        );
    }
}

