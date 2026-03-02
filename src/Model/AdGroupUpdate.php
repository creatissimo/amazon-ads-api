<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupUpdate
{
    public function __construct(
        private string $adGroupId,
        private ?AdProduct $adProduct = null,
        private array $advertisedProductCategoryIds = [],
        private ?UpdateAdGroupBid $bid = null,
        private array $budgets = [],
        private ?CreativeRotationType $creativeRotationType = null,
        private ?string $endDateTime = null,
        private array $fees = [],
        private array $frequencies = [],
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?string $name = null,
        private ?UpdateOptimization $optimization = null,
        private ?UpdatePacing $pacing = null,
        private ?string $purchaseOrderNumber = null,
        private ?string $startDateTime = null,
        private ?UpdateState $state = null,
        private array $tags = [],
        private ?UpdateTargetingSettings $targetingSettings = null,
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

    public function getAdProduct(): ?AdProduct
    {
        return $this->adProduct;
    }

    public function setAdProduct(?AdProduct $adProduct): self
    {
        $this->adProduct = $adProduct;

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

    public function getBid(): ?UpdateAdGroupBid
    {
        return $this->bid;
    }

    public function setBid(?UpdateAdGroupBid $bid): self
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOptimization(): ?UpdateOptimization
    {
        return $this->optimization;
    }

    public function setOptimization(?UpdateOptimization $optimization): self
    {
        $this->optimization = $optimization;

        return $this;
    }

    public function getPacing(): ?UpdatePacing
    {
        return $this->pacing;
    }

    public function setPacing(?UpdatePacing $pacing): self
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

    public function getState(): ?UpdateState
    {
        return $this->state;
    }

    public function setState(?UpdateState $state): self
    {
        $this->state = $state;

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

    public function getTargetingSettings(): ?UpdateTargetingSettings
    {
        return $this->targetingSettings;
    }

    public function setTargetingSettings(?UpdateTargetingSettings $targetingSettings): self
    {
        $this->targetingSettings = $targetingSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adGroupId' => $this->adGroupId,
        ];

        if ($this->adProduct !== null) {
            $data['adProduct'] = $this->adProduct->value;
        }
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
        if ($this->name !== null) {
            $data['name'] = $this->name;
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
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
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
            adGroupId: $data['adGroupId'],
            adProduct: isset($data['adProduct']) ? AdProduct::from($data['adProduct']) : null,
            advertisedProductCategoryIds: $data['advertisedProductCategoryIds'] ?? [],
            bid: isset($data['bid']) ? UpdateAdGroupBid::fromArray($data['bid']) : null,
            budgets: array_map(
                static fn(array $v) => CreateBudget::fromArray($v),
                $data['budgets'] ?? [],
            ),
            creativeRotationType: isset($data['creativeRotationType']) ? CreativeRotationType::from($data['creativeRotationType']) : null,
            endDateTime: $data['endDateTime'] ?? null,
            fees: array_map(
                static fn(array $v) => CreateFee::fromArray($v),
                $data['fees'] ?? [],
            ),
            frequencies: array_map(
                static fn(array $v) => CreateFrequency::fromArray($v),
                $data['frequencies'] ?? [],
            ),
            marketplaceConfigurations: array_map(
                static fn(array $v) => CreateMarketplaceAdGroupConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            name: $data['name'] ?? null,
            optimization: isset($data['optimization']) ? UpdateOptimization::fromArray($data['optimization']) : null,
            pacing: isset($data['pacing']) ? UpdatePacing::fromArray($data['pacing']) : null,
            purchaseOrderNumber: $data['purchaseOrderNumber'] ?? null,
            startDateTime: $data['startDateTime'] ?? null,
            state: isset($data['state']) ? UpdateState::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
            targetingSettings: isset($data['targetingSettings']) ? UpdateTargetingSettings::fromArray($data['targetingSettings']) : null,
        );
    }
}
