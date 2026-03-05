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

    public function toArray(): array
    {
        $data = [
            'productIdType' => $this->productIdType->value,
        ];

        if ($this->globalStoreSetting !== null) {
            $data['globalStoreSetting'] = $this->globalStoreSetting->toArray();
        }
        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(AdvertisedProductMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }
        if ($this->productId !== null) {
            $data['productId'] = $this->productId;
        }
        if ($this->resolvedProductId !== null) {
            $data['resolvedProductId'] = $this->resolvedProductId;
        }
        if ($this->resolvedProductIdType !== null) {
            $data['resolvedProductIdType'] = $this->resolvedProductIdType->value;
        }

        return $data;
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

