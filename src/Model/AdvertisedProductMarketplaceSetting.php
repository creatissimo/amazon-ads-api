<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdvertisedProductMarketplaceSetting
{
    public function __construct(
        private Marketplace $marketplace,
        private string $productId,
        private ?GlobalStoreSettings $globalStoreSetting = null,
        private ?string $resolvedProductId = null,
    ) {
    }

    public function getMarketplace(): Marketplace
    {
        return $this->marketplace;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getGlobalStoreSetting(): ?GlobalStoreSettings
    {
        return $this->globalStoreSetting;
    }

    public function getResolvedProductId(): ?string
    {
        return $this->resolvedProductId;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            productId: $data['productId'],
            globalStoreSetting: isset($data['globalStoreSetting']) ? GlobalStoreSettings::fromArray($data['globalStoreSetting']) : null,
            resolvedProductId: $data['resolvedProductId'] ?? null,
        );
    }
}

