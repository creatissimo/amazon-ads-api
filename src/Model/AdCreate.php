<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdCreate
{
    public function __construct(
        private AdProduct $adProduct,
        private AdType $adType,
        private CreateCreative $creative,
        private CreateState $state,
        private ?string $adGroupId = null,
        private array $marketplaceConfigurations = [],
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaces = [],
        private ?string $name = null,
        private array $tags = [],
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

    public function getAdType(): AdType
    {
        return $this->adType;
    }

    public function setAdType(AdType $adType): self
    {
        $this->adType = $adType;

        return $this;
    }

    public function getCreative(): CreateCreative
    {
        return $this->creative;
    }

    public function setCreative(CreateCreative $creative): self
    {
        $this->creative = $creative;

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

    public function getAdGroupId(): ?string
    {
        return $this->adGroupId;
    }

    public function setAdGroupId(?string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;

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
            'adProduct' => $this->adProduct->value,
            'adType' => $this->adType->value,
            'creative' => $this->creative->toArray(),
            'state' => $this->state->value,
        ];

        if ($this->adGroupId !== null) {
            $data['adGroupId'] = $this->adGroupId;
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
            adProduct: AdProduct::from($data['adProduct']),
            adType: AdType::from($data['adType']),
            creative: CreateCreative::fromArray($data['creative']),
            state: CreateState::from($data['state']),
            adGroupId: $data['adGroupId'] ?? null,
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
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
