<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupCreate
{
    public function __construct(
        private AdProduct $adProduct,
        private string $campaignId,
        private string $name,
        private CreateState $state,
        private array $advertisedProductCategoryIds = [],
        private ?CreateAdGroupBid $bid = null,
        private array $budgets = [],
        private ?CreativeRotationType $creativeRotationType = null,
        private ?CreativeType $creativeType = null,
        private ?string $endDateTime = null,
        private array $fees = [],
        private array $frequencies = [],
        private ?InventoryType $inventoryType = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?CreateOptimization $optimization = null,
        private ?CreatePacing $pacing = null,
        private ?string $purchaseOrderNumber = null,
        private ?string $startDateTime = null,
        private array $tags = [],
        private ?CreateTargetingSettings $targetingSettings = null,
    ) {
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getAdvertisedProductCategoryIds(): array
    {
        return $this->advertisedProductCategoryIds;
    }

    public function setAdvertisedProductCategoryIds(array $advertisedProductCategoryIds): self
    {
        $this->advertisedProductCategoryIds = $advertisedProductCategoryIds;

        return $this;
    }

    public function getBid(): ?CreateAdGroupBid
    {
        return $this->bid;
    }

    public function setBid(?CreateAdGroupBid $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    /** @return CreateBudget[] */
    public function getBudgets(): array
    {
        return $this->budgets;
    }

    /** @param CreateBudget[] $budgets */
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

    /** @return CreateFee[] */
    public function getFees(): array
    {
        return $this->fees;
    }

    /** @param CreateFee[] $fees */
    public function setFees(array $fees): self
    {
        $this->fees = $fees;

        return $this;
    }

    /** @return CreateFrequency[] */
    public function getFrequencies(): array
    {
        return $this->frequencies;
    }

    /** @param CreateFrequency[] $frequencies */
    public function setFrequencies(array $frequencies): self
    {
        $this->frequencies = $frequencies;

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

    /** @return CreateMarketplaceAdGroupConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param CreateMarketplaceAdGroupConfigurations[] $marketplaceConfigurations */
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

    public function getOptimization(): ?CreateOptimization
    {
        return $this->optimization;
    }

    public function setOptimization(?CreateOptimization $optimization): self
    {
        $this->optimization = $optimization;

        return $this;
    }

    public function getPacing(): ?CreatePacing
    {
        return $this->pacing;
    }

    public function setPacing(?CreatePacing $pacing): self
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

    /** @return CreateTag[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    /** @param CreateTag[] $tags */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTargetingSettings(): ?CreateTargetingSettings
    {
        return $this->targetingSettings;
    }

    public function setTargetingSettings(?CreateTargetingSettings $targetingSettings): self
    {
        $this->targetingSettings = $targetingSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adProduct' => $this->adProduct->value,
            'campaignId' => $this->campaignId,
            'name' => $this->name,
            'state' => $this->state->value,
        ];

        if ($this->advertisedProductCategoryIds !== []) {
            $data['advertisedProductCategoryIds'] = $this->advertisedProductCategoryIds;
        }
        if ($this->bid !== null) {
            $data['bid'] = $this->bid->toArray();
        }
        if ($this->budgets !== []) {
            $data['budgets'] = array_map(
                static fn(CreateBudget $v) => $v->toArray(),
                $this->budgets,
            );
        }
        if ($this->creativeRotationType !== null) {
            $data['creativeRotationType'] = $this->creativeRotationType->value;
        }
        if ($this->creativeType !== null) {
            $data['creativeType'] = $this->creativeType->value;
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->fees !== []) {
            $data['fees'] = array_map(
                static fn(CreateFee $v) => $v->toArray(),
                $this->fees,
            );
        }
        if ($this->frequencies !== []) {
            $data['frequencies'] = array_map(
                static fn(CreateFrequency $v) => $v->toArray(),
                $this->frequencies,
            );
        }
        if ($this->inventoryType !== null) {
            $data['inventoryType'] = $this->inventoryType->value;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = array_map(
                static fn(CreateMarketplaceAdGroupConfigurations $v) => $v->toArray(),
                $this->marketplaceConfigurations,
            );
        }
        if ($this->marketplaceScope !== null) {
            $data['marketplaceScope'] = $this->marketplaceScope->value;
        }
        if ($this->marketplaces !== []) {
            $data['marketplaces'] = array_map(
                static fn(Marketplace $v) => $v->value,
                $this->marketplaces,
            );
        }
        if ($this->optimization !== null) {
            $data['optimization'] = $this->optimization->toArray();
        }
        if ($this->pacing !== null) {
            $data['pacing'] = $this->pacing->toArray();
        }
        if ($this->purchaseOrderNumber !== null) {
            $data['purchaseOrderNumber'] = $this->purchaseOrderNumber;
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->tags !== []) {
            $data['tags'] = array_map(
                static fn(CreateTag $v) => $v->toArray(),
                $this->tags,
            );
        }
        if ($this->targetingSettings !== null) {
            $data['targetingSettings'] = $this->targetingSettings->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adProduct: AdProduct::from($data['adProduct']),
            campaignId: $data['campaignId'],
            name: $data['name'],
            state: CreateState::from($data['state']),
            advertisedProductCategoryIds: $data['advertisedProductCategoryIds'] ?? [],
            bid: isset($data['bid']) ? CreateAdGroupBid::fromArray($data['bid']) : null,
            budgets: array_map(
                static fn(array $v) => CreateBudget::fromArray($v),
                $data['budgets'] ?? [],
            ),
            creativeRotationType: isset($data['creativeRotationType']) ? CreativeRotationType::from($data['creativeRotationType']) : null,
            creativeType: isset($data['creativeType']) ? CreativeType::from($data['creativeType']) : null,
            endDateTime: $data['endDateTime'] ?? null,
            fees: array_map(
                static fn(array $v) => CreateFee::fromArray($v),
                $data['fees'] ?? [],
            ),
            frequencies: array_map(
                static fn(array $v) => CreateFrequency::fromArray($v),
                $data['frequencies'] ?? [],
            ),
            inventoryType: isset($data['inventoryType']) ? InventoryType::from($data['inventoryType']) : null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => CreateMarketplaceAdGroupConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            optimization: isset($data['optimization']) ? CreateOptimization::fromArray($data['optimization']) : null,
            pacing: isset($data['pacing']) ? CreatePacing::fromArray($data['pacing']) : null,
            purchaseOrderNumber: $data['purchaseOrderNumber'] ?? null,
            startDateTime: $data['startDateTime'] ?? null,
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
            targetingSettings: isset($data['targetingSettings']) ? CreateTargetingSettings::fromArray($data['targetingSettings']) : null,
        );
    }
}
