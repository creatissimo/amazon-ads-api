<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroup
{
    public function __construct(
        private string $adGroupId,
        private AdProduct $adProduct,
        private string $campaignId,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private string $name,
        private State $state,
        private array $advertisedProductCategoryIds = [],
        private ?AdGroupBid $bid = null,
        private array $budgets = [],
        private ?CreativeRotationType $creativeRotationType = null,
        private ?CreativeType $creativeType = null,
        private ?string $endDateTime = null,
        private array $fees = [],
        private array $frequencies = [],
        private ?string $globalAdGroupId = null,
        private ?InventoryType $inventoryType = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?Optimization $optimization = null,
        private ?Pacing $pacing = null,
        private ?string $purchaseOrderNumber = null,
        private ?string $startDateTime = null,
        private ?Status $status = null,
        private array $tags = [],
        private ?TargetingSettings $targetingSettings = null,
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

    public function getAdProduct(): AdProduct
    {
        return $this->adProduct;
    }

    public function setAdProduct(AdProduct $adProduct): self
    {
        $this->adProduct = $adProduct;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getAdvertisedProductCategoryIds(): array
    {
        return $this->advertisedProductCategoryIds;
    }

    public function setAdvertisedProductCategoryIds(array $advertisedProductCategoryIds): self
    {
        $this->advertisedProductCategoryIds = $advertisedProductCategoryIds;

        return $this;
    }

    public function getBid(): ?AdGroupBid
    {
        return $this->bid;
    }

    public function setBid(?AdGroupBid $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    /** @return Budget[] */
    public function getBudgets(): array
    {
        return $this->budgets;
    }

    /** @param Budget[] $budgets */
    public function setBudgets(array $budgets): self
    {
        $this->budgets = $budgets;

        return $this;
    }

    public function getCreativeRotationType(): ?CreativeRotationType
    {
        return $this->creativeRotationType;
    }

    public function setCreativeRotationType(?CreativeRotationType $creativeRotationType): self
    {
        $this->creativeRotationType = $creativeRotationType;

        return $this;
    }

    public function getCreativeType(): ?CreativeType
    {
        return $this->creativeType;
    }

    public function setCreativeType(?CreativeType $creativeType): self
    {
        $this->creativeType = $creativeType;

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

    /** @return Fee[] */
    public function getFees(): array
    {
        return $this->fees;
    }

    /** @param Fee[] $fees */
    public function setFees(array $fees): self
    {
        $this->fees = $fees;

        return $this;
    }

    /** @return Frequency[] */
    public function getFrequencies(): array
    {
        return $this->frequencies;
    }

    /** @param Frequency[] $frequencies */
    public function setFrequencies(array $frequencies): self
    {
        $this->frequencies = $frequencies;

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

    public function getInventoryType(): ?InventoryType
    {
        return $this->inventoryType;
    }

    public function setInventoryType(?InventoryType $inventoryType): self
    {
        $this->inventoryType = $inventoryType;

        return $this;
    }

    /** @return MarketplaceAdGroupConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param MarketplaceAdGroupConfigurations[] $marketplaceConfigurations */
    public function setMarketplaceConfigurations(array $marketplaceConfigurations): self
    {
        $this->marketplaceConfigurations = $marketplaceConfigurations;

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

    /** @return Marketplace[] */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    /** @param Marketplace[] $marketplaces */
    public function setMarketplaces(array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

        return $this;
    }

    public function getOptimization(): ?Optimization
    {
        return $this->optimization;
    }

    public function setOptimization(?Optimization $optimization): self
    {
        $this->optimization = $optimization;

        return $this;
    }

    public function getPacing(): ?Pacing
    {
        return $this->pacing;
    }

    public function setPacing(?Pacing $pacing): self
    {
        $this->pacing = $pacing;

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

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    /** @return Tag[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    /** @param Tag[] $tags */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTargetingSettings(): ?TargetingSettings
    {
        return $this->targetingSettings;
    }

    public function setTargetingSettings(?TargetingSettings $targetingSettings): self
    {
        $this->targetingSettings = $targetingSettings;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adGroupId: $data['adGroupId'],
            adProduct: AdProduct::from($data['adProduct']),
            campaignId: $data['campaignId'],
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            name: $data['name'],
            state: State::from($data['state']),
            advertisedProductCategoryIds: $data['advertisedProductCategoryIds'] ?? [],
            bid: isset($data['bid']) ? AdGroupBid::fromArray($data['bid']) : null,
            budgets: array_map(
                static fn(array $v) => Budget::fromArray($v),
                $data['budgets'] ?? [],
            ),
            creativeRotationType: isset($data['creativeRotationType']) ? CreativeRotationType::from($data['creativeRotationType']) : null,
            creativeType: isset($data['creativeType']) ? CreativeType::from($data['creativeType']) : null,
            endDateTime: $data['endDateTime'] ?? null,
            fees: array_map(
                static fn(array $v) => Fee::fromArray($v),
                $data['fees'] ?? [],
            ),
            frequencies: array_map(
                static fn(array $v) => Frequency::fromArray($v),
                $data['frequencies'] ?? [],
            ),
            globalAdGroupId: $data['globalAdGroupId'] ?? null,
            inventoryType: isset($data['inventoryType']) ? InventoryType::from($data['inventoryType']) : null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => MarketplaceAdGroupConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            optimization: isset($data['optimization']) ? Optimization::fromArray($data['optimization']) : null,
            pacing: isset($data['pacing']) ? Pacing::fromArray($data['pacing']) : null,
            purchaseOrderNumber: $data['purchaseOrderNumber'] ?? null,
            startDateTime: $data['startDateTime'] ?? null,
            status: isset($data['status']) ? Status::fromArray($data['status']) : null,
            tags: array_map(
                static fn(array $v) => Tag::fromArray($v),
                $data['tags'] ?? [],
            ),
            targetingSettings: isset($data['targetingSettings']) ? TargetingSettings::fromArray($data['targetingSettings']) : null,
        );
    }
}
