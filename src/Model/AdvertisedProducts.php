<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdvertisedProducts
{
    public function __construct(
        private ProductIdType $productIdType,
        private ?GlobalStoreSettings $globalStoreSetting = null,
        private array $marketplaceSettings = [],
        private ?string $productId = null,
        private ?string $resolvedProductId = null,
        private ?ProductIdType $resolvedProductIdType = null,
    ) {
    }

    public function getProductIdType(): ProductIdType
    {
        return $this->productIdType;
    }

    public function getGlobalStoreSetting(): ?GlobalStoreSettings
    {
        return $this->globalStoreSetting;
    }

    /** @return AdvertisedProductMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function getResolvedProductId(): ?string
    {
        return $this->resolvedProductId;
    }

    public function getResolvedProductIdType(): ?ProductIdType
    {
        return $this->resolvedProductIdType;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productIdType: ProductIdType::from($data['productIdType']),
            globalStoreSetting: isset($data['globalStoreSetting']) ? GlobalStoreSettings::fromArray($data['globalStoreSetting']) : null,
            marketplaceSettings: array_map(
                static fn(array $v) => AdvertisedProductMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
            productId: $data['productId'] ?? null,
            resolvedProductId: $data['resolvedProductId'] ?? null,
            resolvedProductIdType: isset($data['resolvedProductIdType']) ? ProductIdType::from($data['resolvedProductIdType']) : null,
        );
    }
}

