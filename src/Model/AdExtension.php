<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtension
{
    public function __construct(
        private string $adExtensionId,
        private AdExtensionType $adExtensionType,
        private AdProduct $adProduct,
        private State $state,
        private MarketplaceScope $marketplaceScope,
        private string $creationDateTime,
        private string $lastUpdatedDateTime,
        private array $adExtensionSettings = [],
        private ?AdExtensionStatus $adExtensionStatus = null,
        private ?string $adGroupId = null,
        private ?string $adId = null,
        private array $marketplaces = [],
    ) {
    }

    public function getAdExtensionId(): string
    {
        return $this->adExtensionId;
    }

    public function setAdExtensionId(string $adExtensionId): self
    {
        $this->adExtensionId = $adExtensionId;

        return $this;
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

    public function getState(): State
    {
        return $this->state;
    }

    public function setState(State $state): self
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

    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    public function setMarketplaces(array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adExtensionId' => $this->adExtensionId,
            'adExtensionType' => $this->adExtensionType->value,
            'adProduct' => $this->adProduct->value,
            'state' => $this->state->value,
            'marketplaceScope' => $this->marketplaceScope->value,
            'creationDateTime' => $this->creationDateTime,
            'lastUpdatedDateTime' => $this->lastUpdatedDateTime,
        ];

        if ($this->adExtensionSettings !== []) {
            $data['adExtensionSettings'] = $this->adExtensionSettings;
        }
        if ($this->adExtensionStatus !== null) {
            $data['adExtensionStatus'] = $this->adExtensionStatus->value;
        }
        if ($this->adGroupId !== null) {
            $data['adGroupId'] = $this->adGroupId;
        }
        if ($this->adId !== null) {
            $data['adId'] = $this->adId;
        }
        if ($this->marketplaces !== []) {
            $data['marketplaces'] = $this->marketplaces;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adExtensionId: $data['adExtensionId'],
            adExtensionType: AdExtensionType::from($data['adExtensionType']),
            adProduct: AdProduct::from($data['adProduct']),
            state: State::from($data['state']),
            marketplaceScope: MarketplaceScope::from($data['marketplaceScope']),
            creationDateTime: $data['creationDateTime'],
            lastUpdatedDateTime: $data['lastUpdatedDateTime'],
            adExtensionSettings: $data['adExtensionSettings'] ?? [],
            adExtensionStatus: isset($data['adExtensionStatus']) ? AdExtensionStatus::from($data['adExtensionStatus']) : null,
            adGroupId: $data['adGroupId'] ?? null,
            adId: $data['adId'] ?? null,
            marketplaces: $data['marketplaces'] ?? [],
        );
    }
}

