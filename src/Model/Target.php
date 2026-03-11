<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Target
{
    public function __construct(
        private AdProduct $adProduct,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private bool $negative,
        private State $state,
        private TargetDetails $targetDetails,
        private string $targetId,
        private TargetType $targetType,
        private ?string $adGroupId = null,
        private ?TargetBid $bid = null,
        private ?string $campaignId = null,
        private ?string $globalTargetId = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?Status $status = null,
        private array $tags = [],
        private ?TargetLevel $targetLevel = null,
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

    public function isNegative(): bool
    {
        return $this->negative;
    }

    public function setNegative(bool $negative): self
    {
        $this->negative = $negative;

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

    public function getTargetDetails(): TargetDetails
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(TargetDetails $targetDetails): self
    {
        $this->targetDetails = $targetDetails;

        return $this;
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

    public function getTargetType(): TargetType
    {
        return $this->targetType;
    }

    public function setTargetType(TargetType $targetType): self
    {
        $this->targetType = $targetType;

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

    public function getBid(): ?TargetBid
    {
        return $this->bid;
    }

    public function setBid(?TargetBid $bid): self
    {
        $this->bid = $bid;

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

    /** @return MarketplaceTargetConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param MarketplaceTargetConfigurations[] $marketplaceConfigurations */
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

    public function getTargetLevel(): ?TargetLevel
    {
        return $this->targetLevel;
    }

    public function setTargetLevel(?TargetLevel $targetLevel): self
    {
        $this->targetLevel = $targetLevel;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adProduct' => $this->adProduct->value,
            'creationDateTime' => $this->creationDateTime,
            'lastUpdatedDateTime' => $this->lastUpdatedDateTime,
            'negative' => $this->negative,
            'state' => $this->state->value,
            'targetDetails' => $this->targetDetails->toArray(),
            'targetId' => $this->targetId,
            'targetType' => $this->targetType->value,
        ];

        if ($this->adGroupId !== null) {
            $data['adGroupId'] = $this->adGroupId;
        }
        if ($this->bid !== null) {
            $data['bid'] = $this->bid->toArray();
        }
        if ($this->campaignId !== null) {
            $data['campaignId'] = $this->campaignId;
        }
        if ($this->globalTargetId !== null) {
            $data['globalTargetId'] = $this->globalTargetId;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = array_map(
                static fn(MarketplaceTargetConfigurations $v) => $v->toArray(),
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
        if ($this->status !== null) {
            $data['status'] = $this->status->toArray();
        }
        if ($this->tags !== []) {
            $data['tags'] = array_map(
                static fn(Tag $v) => $v->toArray(),
                $this->tags,
            );
        }
        if ($this->targetLevel !== null) {
            $data['targetLevel'] = $this->targetLevel->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adProduct: AdProduct::from($data['adProduct']),
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            negative: (bool) $data['negative'],
            state: State::from($data['state']),
            targetDetails: TargetDetails::fromArray($data['targetDetails']),
            targetId: $data['targetId'],
            targetType: TargetType::from($data['targetType']),
            adGroupId: $data['adGroupId'] ?? null,
            bid: isset($data['bid']) ? TargetBid::fromArray($data['bid']) : null,
            campaignId: $data['campaignId'] ?? null,
            globalTargetId: $data['globalTargetId'] ?? null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => MarketplaceTargetConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            status: isset($data['status']) ? Status::fromArray($data['status']) : null,
            tags: array_map(
                static fn(array $v) => Tag::fromArray($v),
                $data['tags'] ?? [],
            ),
            targetLevel: isset($data['targetLevel']) ? TargetLevel::from($data['targetLevel']) : null,
        );
    }
}
