<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Campaign
{
    public function __construct(
        private string $campaignId,
        private string $name,
        private AdProduct $adProduct,
        private State $state,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private ?CostType $costType = null,
        private ?SalesChannel $salesChannel = null,
        private ?MarketplaceScope $marketplaceScope = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?string $portfolioId = null,
        private ?string $brandId = null,
        private ?string $globalCampaignId = null,
        private ?bool $isMultiAdGroupsEnabled = null,
        private ?bool $targetsAmazonDeal = null,
        private ?string $purchaseOrderNumber = null,
        private ?string $skanAppId = null,
        private ?string $targetedPGDealId = null,
        private array $budgets = [],
        private array $countries = [],
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

    public function getCostType(): ?CostType
    {
        return $this->costType;
    }

    public function setCostType(?CostType $costType): self
    {
        $this->costType = $costType;

        return $this;
    }

    public function getSalesChannel(): ?SalesChannel
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannel $salesChannel): self
    {
        $this->salesChannel = $salesChannel;

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

    public function getPortfolioId(): ?string
    {
        return $this->portfolioId;
    }

    public function setPortfolioId(?string $portfolioId): self
    {
        $this->portfolioId = $portfolioId;

        return $this;
    }

    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;

        return $this;
    }

    public function getGlobalCampaignId(): ?string
    {
        return $this->globalCampaignId;
    }

    public function setGlobalCampaignId(?string $globalCampaignId): self
    {
        $this->globalCampaignId = $globalCampaignId;

        return $this;
    }

    public function getIsMultiAdGroupsEnabled(): ?bool
    {
        return $this->isMultiAdGroupsEnabled;
    }

    public function setIsMultiAdGroupsEnabled(?bool $isMultiAdGroupsEnabled): self
    {
        $this->isMultiAdGroupsEnabled = $isMultiAdGroupsEnabled;

        return $this;
    }

    public function getTargetsAmazonDeal(): ?bool
    {
        return $this->targetsAmazonDeal;
    }

    public function setTargetsAmazonDeal(?bool $targetsAmazonDeal): self
    {
        $this->targetsAmazonDeal = $targetsAmazonDeal;

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

    public function getSkanAppId(): ?string
    {
        return $this->skanAppId;
    }

    public function setSkanAppId(?string $skanAppId): self
    {
        $this->skanAppId = $skanAppId;

        return $this;
    }

    public function getTargetedPGDealId(): ?string
    {
        return $this->targetedPGDealId;
    }

    public function setTargetedPGDealId(?string $targetedPGDealId): self
    {
        $this->targetedPGDealId = $targetedPGDealId;

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

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setCountries(array $countries): self
    {
        $this->countries = $countries;

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
        $budgets = array_map(
            static fn(array $b) => Budget::fromArray($b),
            $data['budgets'] ?? [],
        );

        return new self(
            campaignId: $data['campaignId'],
            name: $data['name'],
            adProduct: AdProduct::from($data['adProduct']),
            state: State::from($data['state']),
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            costType: isset($data['costType']) ? CostType::from($data['costType']) : null,
            salesChannel: isset($data['salesChannel']) ? SalesChannel::from($data['salesChannel']) : null,
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            startDateTime: $data['startDateTime'] ?? null,
            endDateTime: $data['endDateTime'] ?? null,
            portfolioId: $data['portfolioId'] ?? null,
            brandId: $data['brandId'] ?? null,
            globalCampaignId: $data['globalCampaignId'] ?? null,
            isMultiAdGroupsEnabled: $data['isMultiAdGroupsEnabled'] ?? null,
            targetsAmazonDeal: $data['targetsAmazonDeal'] ?? null,
            purchaseOrderNumber: $data['purchaseOrderNumber'] ?? null,
            skanAppId: $data['skanAppId'] ?? null,
            targetedPGDealId: $data['targetedPGDealId'] ?? null,
            budgets: $budgets,
            countries: $data['countries'] ?? [],
            tags: $data['tags'] ?? [],
        );
    }
}
