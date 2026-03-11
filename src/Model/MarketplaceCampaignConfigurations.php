<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MarketplaceCampaignConfigurations
{
    public function __construct(
        private string $campaignId,
        private Marketplace $marketplace,
        private MarketplaceCampaignFieldOverrides $overrides,
    ) {
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setCampaignId(string $campaignId): self
    {
        $this->campaignId = $campaignId;

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

    public function getOverrides(): MarketplaceCampaignFieldOverrides
    {
        return $this->overrides;
    }

    public function setOverrides(MarketplaceCampaignFieldOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'campaignId' => $this->campaignId,
            'marketplace' => $this->marketplace->value,
            'overrides' => $this->overrides->toArray(),
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaignId: $data['campaignId'],
            marketplace: Marketplace::from($data['marketplace']),
            overrides: MarketplaceCampaignFieldOverrides::fromArray($data['overrides']),
        );
    }
}
