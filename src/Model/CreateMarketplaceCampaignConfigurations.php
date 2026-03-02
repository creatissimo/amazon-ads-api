<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMarketplaceCampaignConfigurations
{
    public function __construct(
        private Marketplace $marketplace,
        private CreateMarketplaceCampaignFieldOverrides $overrides,
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

    public function getOverrides(): CreateMarketplaceCampaignFieldOverrides
    {
        return $this->overrides;
    }

    public function setOverrides(CreateMarketplaceCampaignFieldOverrides $overrides): self
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
            overrides: CreateMarketplaceCampaignFieldOverrides::fromArray($data['overrides']),
        );
    }
}
