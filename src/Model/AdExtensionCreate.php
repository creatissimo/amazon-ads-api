<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionCreate
{
    public function __construct(
        private AdExtensionType $adExtensionType,
        private AdProduct $adProduct,
        private CreateState $state,
        private MarketplaceScope $marketplaceScope,
        private array $marketplaces,
        private array $adExtensionSettings,
        private ?AdExtensionStatus $adExtensionStatus = null,
        private ?string $adGroupId = null,
        private ?string $adId = null,
    ) {
    }

    public function getAdExtensionType(): AdExtensionType
    {
        return $this->adExtensionType;
    }

    public function setAdExtensionType(AdExtensionType $adExtensionType): self
    {
        $this->adExtensionType = $adExtensionType;

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

    public function getMarketplaceScope(): MarketplaceScope
    {
        return $this->marketplaceScope;
    }

    public function setMarketplaceScope(MarketplaceScope $marketplaceScope): self
    {
        $this->marketplaceScope = $marketplaceScope;

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

    public function getAdExtensionSettings(): array
    {
        return $this->adExtensionSettings;
    }

    public function setAdExtensionSettings(array $adExtensionSettings): self
    {
        $this->adExtensionSettings = $adExtensionSettings;

        return $this;
    }

    public function getAdExtensionStatus(): ?AdExtensionStatus
    {
        return $this->adExtensionStatus;
    }

    public function setAdExtensionStatus(?AdExtensionStatus $adExtensionStatus): self
    {
        $this->adExtensionStatus = $adExtensionStatus;

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

    public function getAdId(): ?string
    {
        return $this->adId;
    }

    public function setAdId(?string $adId): self
    {
        $this->adId = $adId;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adExtensionType' => $this->adExtensionType->value,
            'adProduct' => $this->adProduct->value,
            'state' => $this->state->value,
            'marketplaceScope' => $this->marketplaceScope->value,
            'marketplaces' => $this->marketplaces,
            'adExtensionSettings' => $this->adExtensionSettings,
        ];

        if ($this->adExtensionStatus !== null) {
            $data['adExtensionStatus'] = $this->adExtensionStatus->value;
        }
        if ($this->adGroupId !== null) {
            $data['adGroupId'] = $this->adGroupId;
        }
        if ($this->adId !== null) {
            $data['adId'] = $this->adId;
        }

        return $data;
    }
}

