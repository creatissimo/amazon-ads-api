<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignCreate
{
    public function __construct(
        private string $name,
        private AdProduct $adProduct,
        private CreateState $state,
        private ?CostType $costType = null,
        private ?SalesChannel $salesChannel = null,
        private ?MarketplaceScope $marketplaceScope = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?string $portfolioId = null,
        private ?string $brandId = null,
        private ?string $purchaseOrderNumber = null,
        private ?string $skanAppId = null,
        private ?string $targetedPGDealId = null,
        private ?CreateAutoCreationSettings $autoCreationSettings = null,
        private ?CreateCampaignOptimizations $optimizations = null,
        private array $budgets = [],
        private array $countries = [],
        private array $fees = [],
        private array $flights = [],
        private array $frequencies = [],
        private array $marketplaceConfigurations = [],
        private array $marketplaces = [],
        private array $siteRestrictions = [],
        private array $tags = [],
    ) {
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

    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    public function setMarketplaces(array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

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

    public function getAutoCreationSettings(): ?CreateAutoCreationSettings
    {
        return $this->autoCreationSettings;
    }

    public function setAutoCreationSettings(?CreateAutoCreationSettings $autoCreationSettings): self
    {
        $this->autoCreationSettings = $autoCreationSettings;

        return $this;
    }

    public function getOptimizations(): ?CreateCampaignOptimizations
    {
        return $this->optimizations;
    }

    public function setOptimizations(?CreateCampaignOptimizations $optimizations): self
    {
        $this->optimizations = $optimizations;

        return $this;
    }

    /** @return CreateCampaignFee[] */
    public function getFees(): array
    {
        return $this->fees;
    }

    /** @param CreateCampaignFee[] $fees */
    public function setFees(array $fees): self
    {
        $this->fees = $fees;

        return $this;
    }

    /** @return CreateCampaignFlight[] */
    public function getFlights(): array
    {
        return $this->flights;
    }

    /** @param CreateCampaignFlight[] $flights */
    public function setFlights(array $flights): self
    {
        $this->flights = $flights;

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

    /** @return CreateMarketplaceCampaignConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param CreateMarketplaceCampaignConfigurations[] $marketplaceConfigurations */
    public function setMarketplaceConfigurations(array $marketplaceConfigurations): self
    {
        $this->marketplaceConfigurations = $marketplaceConfigurations;

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

    public function toArray(): array
    {
        $data = [
            'name' => $this->name,
            'adProduct' => $this->adProduct->value,
            'state' => $this->state->value,
        ];

        if ($this->costType !== null) {
            $data['costType'] = $this->costType->value;
        }
        if ($this->salesChannel !== null) {
            $data['salesChannel'] = $this->salesChannel->value;
        }
        if ($this->marketplaceScope !== null) {
            $data['marketplaceScope'] = $this->marketplaceScope->value;
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->portfolioId !== null) {
            $data['portfolioId'] = $this->portfolioId;
        }
        if ($this->brandId !== null) {
            $data['brandId'] = $this->brandId;
        }
        if ($this->purchaseOrderNumber !== null) {
            $data['purchaseOrderNumber'] = $this->purchaseOrderNumber;
        }
        if ($this->skanAppId !== null) {
            $data['skanAppId'] = $this->skanAppId;
        }
        if ($this->targetedPGDealId !== null) {
            $data['targetedPGDealId'] = $this->targetedPGDealId;
        }
        if ($this->budgets !== []) {
            $data['budgets'] = array_map(
                static fn(Budget $b) => $b->toArray(),
                $this->budgets,
            );
        }
        if ($this->countries !== []) {
            $data['countries'] = $this->countries;
        }
        if ($this->marketplaces !== []) {
            $data['marketplaces'] = array_map(
                static fn(Marketplace $m) => $m->value,
                $this->marketplaces,
            );
        }
        if ($this->tags !== []) {
            $data['tags'] = $this->tags;
        }
        if ($this->autoCreationSettings !== null) {
            $data['autoCreationSettings'] = $this->autoCreationSettings->toArray();
        }
        if ($this->optimizations !== null) {
            $data['optimizations'] = $this->optimizations->toArray();
        }
        if ($this->fees !== []) {
            $data['fees'] = array_map(
                static fn(CreateCampaignFee $f) => $f->toArray(),
                $this->fees,
            );
        }
        if ($this->flights !== []) {
            $data['flights'] = array_map(
                static fn(CreateCampaignFlight $f) => $f->toArray(),
                $this->flights,
            );
        }
        if ($this->frequencies !== []) {
            $data['frequencies'] = array_map(
                static fn(CreateFrequency $f) => $f->toArray(),
                $this->frequencies,
            );
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = array_map(
                static fn(CreateMarketplaceCampaignConfigurations $m) => $m->toArray(),
                $this->marketplaceConfigurations,
            );
        }
        if ($this->siteRestrictions !== []) {
            $data['siteRestrictions'] = array_map(
                static fn(SiteRestriction $s) => $s->value,
                $this->siteRestrictions,
            );
        }

        return $data;
    }
}
