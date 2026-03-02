<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Ad
{
    public function __construct(
        private string $adId,
        private AdProduct $adProduct,
        private AdType $adType,
        private State $state,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private array $creative = [],
        private ?string $adGroupId = null,
        private ?string $campaignId = null,
        private ?string $name = null,
        private ?string $globalAdId = null,
        private ?MarketplaceScope $marketplaceScope = null,
        private ?array $activeCreative = null,
        private array $marketplaceConfigurations = [],
        private array $marketplaces = [],
        private array $tags = [],
    ) {
    }

    public function getAdId(): string
    {
        return $this->adId;
    }

    public function setAdId(string $adId): self
    {
        $this->adId = $adId;

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

    public function getAdType(): AdType
    {
        return $this->adType;
    }

    public function setAdType(AdType $adType): self
    {
        $this->adType = $adType;

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

    public function getCreative(): array
    {
        return $this->creative;
    }

    public function setCreative(array $creative): self
    {
        $this->creative = $creative;

        return $this;
    }

    public function getAdGroupId(): ?string
    {
        return $this->adGroupId;
    }

    public function setAdGroupId(?string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;

        return $this;
    }

    public function getCampaignId(): ?string
    {
        return $this->campaignId;
    }

    public function setCampaignId(?string $campaignId): self
    {
        $this->campaignId = $campaignId;

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

    public function getGlobalAdId(): ?string
    {
        return $this->globalAdId;
    }

    public function setGlobalAdId(?string $globalAdId): self
    {
        $this->globalAdId = $globalAdId;

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

    public function getActiveCreative(): ?array
    {
        return $this->activeCreative;
    }

    public function setActiveCreative(?array $activeCreative): self
    {
        $this->activeCreative = $activeCreative;

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
            adId: $data['adId'],
            adProduct: AdProduct::from($data['adProduct']),
            adType: AdType::from($data['adType']),
            state: State::from($data['state']),
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            creative: $data['creative'] ?? [],
            adGroupId: $data['adGroupId'] ?? null,
            campaignId: $data['campaignId'] ?? null,
            name: $data['name'] ?? null,
            globalAdId: $data['globalAdId'] ?? null,
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            activeCreative: $data['activeCreative'] ?? null,
            marketplaceConfigurations: $data['marketplaceConfigurations'] ?? [],
            marketplaces: $data['marketplaces'] ?? [],
            tags: $data['tags'] ?? [],
        );
    }
}

