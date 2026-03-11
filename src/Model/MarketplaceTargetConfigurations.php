<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MarketplaceTargetConfigurations
{
    public function __construct(
        private Marketplace $marketplace,
        private MarketplaceTargetFieldOverrides $overrides,
        private string $targetId,
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

    public function getOverrides(): MarketplaceTargetFieldOverrides
    {
        return $this->overrides;
    }

    public function setOverrides(MarketplaceTargetFieldOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    public function getTargetId(): string
    {
        return $this->targetId;
    }

    public function setTargetId(string $targetId): self
    {
        $this->targetId = $targetId;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'marketplace' => $this->marketplace->value,
            'overrides' => $this->overrides->toArray(),
            'targetId' => $this->targetId,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            overrides: MarketplaceTargetFieldOverrides::fromArray($data['overrides']),
            targetId: $data['targetId'],
        );
    }
}
