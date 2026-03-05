<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Ad
{
    public function __construct(
        private string $adId,
        private AdProduct $adProduct,
        private AdType $adType,
        private string $creationDateTime,
        private Creative $creative,
        private string $lastUpdatedDateTime,
        private State $state,
        private ?Creative $activeCreative = null,
        private ?string $adGroupId = null,
        private ?string $campaignId = null,
        private ?string $globalAdId = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?string $name = null,
        private ?Status $status = null,
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

    public function getCreationDateTime(): string
    {
        return $this->creationDateTime;
    }

    public function setCreationDateTime(string $creationDateTime): self
    {
        $this->creationDateTime = $creationDateTime;

        return $this;
    }

    public function getCreative(): Creative
    {
        return $this->creative;
    }

    public function setCreative(Creative $creative): self
    {
        $this->creative = $creative;

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

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getActiveCreative(): ?Creative
    {
        return $this->activeCreative;
    }

    public function setActiveCreative(?Creative $activeCreative): self
    {
        $this->activeCreative = $activeCreative;

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

    public function getGlobalAdId(): ?string
    {
        return $this->globalAdId;
    }

    public function setGlobalAdId(?string $globalAdId): self
    {
        $this->globalAdId = $globalAdId;

        return $this;
    }

    /** @return MarketplaceAdConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param MarketplaceAdConfigurations[] $marketplaceConfigurations */
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

    public static function fromArray(array $data): self
    {
        return new self(
            adId: $data['adId'],
            adProduct: AdProduct::from($data['adProduct']),
            adType: AdType::from($data['adType']),
            creationDateTime: $data['creationDateTime'],
            creative: Creative::fromArray($data['creative']),
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            state: State::from($data['state']),
            activeCreative: isset($data['activeCreative']) ? Creative::fromArray($data['activeCreative']) : null,
            adGroupId: $data['adGroupId'] ?? null,
            campaignId: $data['campaignId'] ?? null,
            globalAdId: $data['globalAdId'] ?? null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => MarketplaceAdConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            name: $data['name'] ?? null,
            status: isset($data['status']) ? Status::fromArray($data['status']) : null,
            tags: array_map(
                static fn(array $v) => Tag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
