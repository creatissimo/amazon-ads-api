<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MarketplaceAdGroupConfigurations
{
    public function __construct(
        private string $adGroupId,
        private Marketplace $marketplace,
        private MarketplaceAdGroupFieldOverrides $overrides,
    ) {
    }

    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    public function setAdGroupId(string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;

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

    public function getOverrides(): MarketplaceAdGroupFieldOverrides
    {
        return $this->overrides;
    }

    public function setOverrides(MarketplaceAdGroupFieldOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adGroupId: $data['adGroupId'],
            marketplace: Marketplace::from($data['marketplace']),
            overrides: MarketplaceAdGroupFieldOverrides::fromArray($data['overrides']),
        );
    }
}
