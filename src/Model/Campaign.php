<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Campaign
{
    public function __construct(
        private AdProduct $adProduct,
        private string $campaignId,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private string $name,
        private State $state,
        private ?AutoCreationSettings $autoCreationSettings = null,
        private ?AutoScaleGlobalCampaignSetting $autoScaleGlobalCampaign = null,
        private ?string $brandId = null,
        private array $budgets = [],
        private ?CostType $costType = null,
        private array $countries = [],
        private ?string $endDateTime = null,
        private array $fees = [],
        private array $flights = [],
        private array $frequencies = [],
        private ?string $globalCampaignId = null,
        private ?bool $isMultiAdGroupsEnabled = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?CampaignOptimizations $optimizations = null,
        private ?string $portfolioId = null,
        private ?string $purchaseOrderNumber = null,
        private ?SalesChannel $salesChannel = null,
        private array $siteRestrictions = [],
        private ?string $skanAppId = null,
        private ?string $startDateTime = null,
        private ?Status $status = null,
        private array $tags = [],
        private ?string $targetedPGDealId = null,
        private ?bool $targetsAmazonDeal = null,
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

    public function getAutoCreationSettings(): ?AutoCreationSettings
    {
        return $this->autoCreationSettings;
    }

    public function setAutoCreationSettings(?AutoCreationSettings $autoCreationSettings): self
    {
        $this->autoCreationSettings = $autoCreationSettings;

        return $this;
    }

    public function getAutoScaleGlobalCampaign(): ?AutoScaleGlobalCampaignSetting
    {
        return $this->autoScaleGlobalCampaign;
    }

    public function setAutoScaleGlobalCampaign(?AutoScaleGlobalCampaignSetting $autoScaleGlobalCampaign): self
    {
        $this->autoScaleGlobalCampaign = $autoScaleGlobalCampaign;

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

    public function getCostType(): ?CostType
    {
        return $this->costType;
    }

    public function setCostType(?CostType $costType): self
    {
        $this->costType = $costType;

        return $this;
    }

    /** @return CountryCode[] */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /** @param CountryCode[] $countries */
    public function setCountries(array $countries): self
    {
        $this->countries = $countries;

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

    /** @return CampaignFee[] */
    public function getFees(): array
    {
        return $this->fees;
    }

    /** @param CampaignFee[] $fees */
    public function setFees(array $fees): self
    {
        $this->fees = $fees;

        return $this;
    }

    /** @return CampaignFlight[] */
    public function getFlights(): array
    {
        return $this->flights;
    }

    /** @param CampaignFlight[] $flights */
    public function setFlights(array $flights): self
    {
        $this->flights = $flights;

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

    /** @return MarketplaceCampaignConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param MarketplaceCampaignConfigurations[] $marketplaceConfigurations */
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

    public function getOptimizations(): ?CampaignOptimizations
    {
        return $this->optimizations;
    }

    public function setOptimizations(?CampaignOptimizations $optimizations): self
    {
        $this->optimizations = $optimizations;

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

    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }

    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

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

    /** @return SiteRestriction[] */
    public function getSiteRestrictions(): array
    {
        return $this->siteRestrictions;
    }

    /** @param SiteRestriction[] $siteRestrictions */
    public function setSiteRestrictions(array $siteRestrictions): self
    {
        $this->siteRestrictions = $siteRestrictions;

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

    public function getTargetedPGDealId(): ?string
    {
        return $this->targetedPGDealId;
    }

    public function setTargetedPGDealId(?string $targetedPGDealId): self
    {
        $this->targetedPGDealId = $targetedPGDealId;

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

    public function toArray(): array
    {
        $data = [
            'adProduct' => $this->adProduct->value,
            'campaignId' => $this->campaignId,
            'creationDateTime' => $this->creationDateTime,
            'lastUpdatedDateTime' => $this->lastUpdatedDateTime,
            'name' => $this->name,
            'state' => $this->state->value,
        ];

        if ($this->autoCreationSettings !== null) {
            $data['autoCreationSettings'] = $this->autoCreationSettings->toArray();
        }
        if ($this->autoScaleGlobalCampaign !== null) {
            $data['autoScaleGlobalCampaign'] = $this->autoScaleGlobalCampaign->value;
        }
        if ($this->brandId !== null) {
            $data['brandId'] = $this->brandId;
        }
        if ($this->budgets !== []) {
            $data['budgets'] = array_map(
                static fn(Budget $v) => $v->toArray(),
                $this->budgets,
            );
        }
        if ($this->costType !== null) {
            $data['costType'] = $this->costType->value;
        }
        if ($this->countries !== []) {
            $data['countries'] = array_map(
                static fn(CountryCode $v) => $v->value,
                $this->countries,
            );
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->fees !== []) {
            $data['fees'] = array_map(
                static fn(CampaignFee $v) => $v->toArray(),
                $this->fees,
            );
        }
        if ($this->flights !== []) {
            $data['flights'] = array_map(
                static fn(CampaignFlight $v) => $v->toArray(),
                $this->flights,
            );
        }
        if ($this->frequencies !== []) {
            $data['frequencies'] = array_map(
                static fn(Frequency $v) => $v->toArray(),
                $this->frequencies,
            );
        }
        if ($this->globalCampaignId !== null) {
            $data['globalCampaignId'] = $this->globalCampaignId;
        }
        if ($this->isMultiAdGroupsEnabled !== null) {
            $data['isMultiAdGroupsEnabled'] = $this->isMultiAdGroupsEnabled;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = array_map(
                static fn(MarketplaceCampaignConfigurations $v) => $v->toArray(),
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
        if ($this->optimizations !== null) {
            $data['optimizations'] = $this->optimizations->toArray();
        }
        if ($this->portfolioId !== null) {
            $data['portfolioId'] = $this->portfolioId;
        }
        if ($this->purchaseOrderNumber !== null) {
            $data['purchaseOrderNumber'] = $this->purchaseOrderNumber;
        }
        if ($this->salesChannel !== null) {
            $data['salesChannel'] = $this->salesChannel->value;
        }
        if ($this->siteRestrictions !== []) {
            $data['siteRestrictions'] = array_map(
                static fn(SiteRestriction $v) => $v->value,
                $this->siteRestrictions,
            );
        }
        if ($this->skanAppId !== null) {
            $data['skanAppId'] = $this->skanAppId;
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->status !== null) {
            $data['status'] = $this->status->toArray();
        }
        if ($this->tags !== []) {
            $data['tags'] = array_map(
                static fn(Tag $v) => $v->toArray(),
                $this->tags,
            );
        }
        if ($this->targetedPGDealId !== null) {
            $data['targetedPGDealId'] = $this->targetedPGDealId;
        }
        if ($this->targetsAmazonDeal !== null) {
            $data['targetsAmazonDeal'] = $this->targetsAmazonDeal;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adProduct: AdProduct::from($data['adProduct']),
            campaignId: $data['campaignId'],
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            name: $data['name'],
            state: State::from($data['state']),
            autoCreationSettings: isset($data['autoCreationSettings']) ? AutoCreationSettings::fromArray($data['autoCreationSettings']) : null,
            autoScaleGlobalCampaign: isset($data['autoScaleGlobalCampaign']) ? AutoScaleGlobalCampaignSetting::from($data['autoScaleGlobalCampaign']) : null,
            brandId: $data['brandId'] ?? null,
            budgets: array_map(
                static fn(array $v) => Budget::fromArray($v),
                $data['budgets'] ?? [],
            ),
            costType: isset($data['costType']) ? CostType::from($data['costType']) : null,
            countries: array_map(
                static fn(string $v) => CountryCode::from($v),
                $data['countries'] ?? [],
            ),
            endDateTime: $data['endDateTime'] ?? null,
            fees: array_map(
                static fn(array $v) => CampaignFee::fromArray($v),
                $data['fees'] ?? [],
            ),
            flights: array_map(
                static fn(array $v) => CampaignFlight::fromArray($v),
                $data['flights'] ?? [],
            ),
            frequencies: array_map(
                static fn(array $v) => Frequency::fromArray($v),
                $data['frequencies'] ?? [],
            ),
            globalCampaignId: $data['globalCampaignId'] ?? null,
            isMultiAdGroupsEnabled: isset($data['isMultiAdGroupsEnabled']) ? (bool) $data['isMultiAdGroupsEnabled'] : null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => MarketplaceCampaignConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            optimizations: isset($data['optimizations']) ? CampaignOptimizations::fromArray($data['optimizations']) : null,
            portfolioId: $data['portfolioId'] ?? null,
            purchaseOrderNumber: $data['purchaseOrderNumber'] ?? null,
            salesChannel: isset($data['salesChannel']) ? SalesChannel::from($data['salesChannel']) : null,
            siteRestrictions: array_map(
                static fn(string $v) => SiteRestriction::from($v),
                $data['siteRestrictions'] ?? [],
            ),
            skanAppId: $data['skanAppId'] ?? null,
            startDateTime: $data['startDateTime'] ?? null,
            status: isset($data['status']) ? Status::fromArray($data['status']) : null,
            tags: array_map(
                static fn(array $v) => Tag::fromArray($v),
                $data['tags'] ?? [],
            ),
            targetedPGDealId: $data['targetedPGDealId'] ?? null,
            targetsAmazonDeal: isset($data['targetsAmazonDeal']) ? (bool) $data['targetsAmazonDeal'] : null,
        );
    }
}
