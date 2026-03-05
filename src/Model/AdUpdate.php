<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdUpdate
{
    public function __construct(
        private string $adId,
        private ?UpdateCreative $creative = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?string $name = null,
        private ?UpdateState $state = null,
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

    public function getCreative(): ?UpdateCreative
    {
        return $this->creative;
    }

    public function setCreative(?UpdateCreative $creative): self
    {
        $this->creative = $creative;

        return $this;
    }

    /** @return CreateMarketplaceAdConfigurations[] */
    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    /** @param CreateMarketplaceAdConfigurations[] $marketplaceConfigurations */
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
            'adId' => $this->adId,
        ];

        if ($this->creative !== null) {
            $data['creative'] = $this->creative->toArray();
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = array_map(
                static fn(CreateMarketplaceAdConfigurations $v) => $v->toArray(),
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
            adId: $data['adId'],
            creative: isset($data['creative']) ? UpdateCreative::fromArray($data['creative']) : null,
            marketplaceConfigurations: array_map(
                static fn(array $v) => CreateMarketplaceAdConfigurations::fromArray($v),
                $data['marketplaceConfigurations'] ?? [],
            ),
            marketplaceScope: isset($data['marketplaceScope']) ? MarketplaceScope::from($data['marketplaceScope']) : null,
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            name: $data['name'] ?? null,
            state: isset($data['state']) ? UpdateState::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
