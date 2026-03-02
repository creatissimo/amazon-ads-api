<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdCreate
{
    public function __construct(
        private AdProduct $adProduct,
        private AdType $adType,
        private CreateState $state,
        private array $creative,
        private ?string $adGroupId = null,
        private ?string $name = null,
        private ?MarketplaceScope $marketplaceScope = null,
        private array $marketplaceConfigurations = [],
        private array $marketplaces = [],
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

    public function getState(): CreateState
    {
        return $this->state;
    }

    public function setState(CreateState $state): self
    {
        $this->state = $state;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function toArray(): array
    {
        $data = [
            'adProduct' => $this->adProduct->value,
            'adType' => $this->adType->value,
            'state' => $this->state->value,
            'creative' => $this->creative,
        ];

        if ($this->adGroupId !== null) {
            $data['adGroupId'] = $this->adGroupId;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->marketplaceScope !== null) {
            $data['marketplaceScope'] = $this->marketplaceScope->value;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = $this->marketplaceConfigurations;
        }
        if ($this->marketplaces !== []) {
            $data['marketplaces'] = $this->marketplaces;
        }
        if ($this->tags !== []) {
            $data['tags'] = $this->tags;
        }

        return $data;
    }
}

