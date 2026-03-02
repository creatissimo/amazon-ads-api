<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Target
{
    public function __construct(
        private string $targetId,
        private AdProduct $adProduct,
        private string $targetType,
        private State $state,
        private bool $negative,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private array $targetDetails = [],
        private ?string $adGroupId = null,
        private ?string $campaignId = null,
        private ?string $globalTargetId = null,
        private ?string $targetLevel = null,
        private ?MarketplaceScope $marketplaceScope = null,
        private ?Status $status = null,
        private array $bid = [],
        private array $marketplaceConfigurations = [],
        private array $marketplaces = [],
        private array $tags = [],
    ) {
    }

    public function getTargetId(): string
    {
        return $this->targetId;
    }

    public function setTargetId(string $targetId): self
    {
        $this->targetId = $targetId;

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

    public function getTargetType(): string
    {
        return $this->targetType;
    }

    public function setTargetType(string $targetType): self
    {
        $this->targetType = $targetType;

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

    public function isNegative(): bool
    {
        return $this->negative;
    }

    public function setNegative(bool $negative): self
    {
        $this->negative = $negative;

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

    public function getTargetDetails(): array
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(array $targetDetails): self
    {
        $this->targetDetails = $targetDetails;

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

    public function getGlobalTargetId(): ?string
    {
        return $this->globalTargetId;
    }

    public function setGlobalTargetId(?string $globalTargetId): self
    {
        $this->globalTargetId = $globalTargetId;

        return $this;
    }

    public function getTargetLevel(): ?string
    {
        return $this->targetLevel;
    }

    public function setTargetLevel(?string $targetLevel): self
    {
        $this->targetLevel = $targetLevel;

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

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

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
            targetId: $data['targetId'],
            adProduct: AdProduct::from($data['adProduct']),
            targetType: $data['targetType'],
            state: State::from($data['state']),
            negative: $data['negative'],
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            targetDetails: $data['targetDetails'] ?? [],
            adGroupId: $data['adGroupId'] ?? null,
            campaignId: $data['campaignId'] ?? null,
            globalTargetId: $data['globalTargetId'] ?? null,
            targetLevel: $data['targetLevel'] ?? null,
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            status: isset($data['status']) ? Status::fromArray($data['status']) : null,
            bid: $data['bid'] ?? [],
            marketplaceConfigurations: $data['marketplaceConfigurations'] ?? [],
            marketplaces: $data['marketplaces'] ?? [],
            tags: $data['tags'] ?? [],
        );
    }
}

