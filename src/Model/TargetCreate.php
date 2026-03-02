<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetCreate
{
    public function __construct(
        private AdProduct $adProduct,
        private string $targetType,
        private CreateState $state,
        private array $targetDetails,
        private ?string $adGroupId = null,
        private ?string $campaignId = null,
        private ?bool $negative = null,
        private ?MarketplaceScope $marketplaceScope = null,
        private array $bid = [],
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

    public function getTargetType(): string
    {
        return $this->targetType;
    }

    public function setTargetType(string $targetType): self
    {
        $this->targetType = $targetType;

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

    public function isNegative(): ?bool
    {
        return $this->negative;
    }

    public function setNegative(?bool $negative): self
    {
        $this->negative = $negative;

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

    public function toArray(): array
    {
        $data = [
            'adProduct' => $this->adProduct->value,
            'targetType' => $this->targetType,
            'state' => $this->state->value,
            'targetDetails' => $this->targetDetails,
        ];

        if ($this->adGroupId !== null) {
            $data['adGroupId'] = $this->adGroupId;
        }
        if ($this->campaignId !== null) {
            $data['campaignId'] = $this->campaignId;
        }
        if ($this->negative !== null) {
            $data['negative'] = $this->negative;
        }
        if ($this->marketplaceScope !== null) {
            $data['marketplaceScope'] = $this->marketplaceScope->value;
        }
        if ($this->bid !== []) {
            $data['bid'] = $this->bid;
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

