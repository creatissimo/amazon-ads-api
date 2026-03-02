<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMarketplaceTargetConfigurations
{
    public function __construct(
        private Marketplace $marketplace,
        private CreateMarketplaceTargetFieldOverrides $overrides,
    ) {
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

    public function getOverrides(): CreateMarketplaceTargetFieldOverrides
    {
        return $this->overrides;
    }

    public function setOverrides(CreateMarketplaceTargetFieldOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'marketplace' => $this->marketplace->value,
            'overrides' => $this->overrides->toArray(),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            overrides: CreateMarketplaceTargetFieldOverrides::fromArray($data['overrides']),
        );
    }
}
