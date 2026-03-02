<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetUpdate
{
    public function __construct(
        private string $targetId,
        private ?UpdateTargetBid $bid = null,
        private ?string $campaignId = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?UpdateState $state = null,
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

    public function getBid(): ?UpdateTargetBid
    {
        return $this->bid;
    }

    public function setBid(?UpdateTargetBid $bid): self
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

    /** @return CreateMarketplaceTargetConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param CreateMarketplaceTargetConfigurations[] $marketplaceConfigurations */
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

    public function toArray(): array
    {
        $data = [
            'targetId' => $this->targetId,
        ];

        if ($this->bid !== null) {
            $data['bid'] = $this->bid->toArray();
        }
        if ($this->campaignId !== null) {
            $data['campaignId'] = $this->campaignId;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = array_map(
                static fn(CreateMarketplaceTargetConfigurations $v) => $v->toArray(),
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
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->tags !== []) {
            $data['tags'] = array_map(
                static fn(CreateTag $v) => $v->toArray(),
                $this->tags,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            targetId: $data['targetId'],
            bid: isset($data['bid']) ? UpdateTargetBid::fromArray($data['bid']) : null,
            campaignId: $data['campaignId'] ?? null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => CreateMarketplaceTargetConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            state: isset($data['state']) ? UpdateState::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
