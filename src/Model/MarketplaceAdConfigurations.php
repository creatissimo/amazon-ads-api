<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MarketplaceAdConfigurations
{
    public function __construct(
        private string $adId,
        private Marketplace $marketplace,
        private MarketplaceAdFieldOverrides $overrides,
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

    public function getMarketplace(): Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(Marketplace $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getOverrides(): MarketplaceAdFieldOverrides
    {
        return $this->overrides;
    }

    public function setOverrides(MarketplaceAdFieldOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adId' => $this->adId,
            'marketplace' => $this->marketplace->value,
            'overrides' => $this->overrides->toArray(),
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adId: $data['adId'],
            marketplace: Marketplace::from($data['marketplace']),
            overrides: MarketplaceAdFieldOverrides::fromArray($data['overrides']),
        );
    }
}
