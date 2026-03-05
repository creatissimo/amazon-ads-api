<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdvertisedProducts
{
    public function __construct(
        private ProductIdType $productIdType,
        private ?CreateGlobalStoreSettings $globalStoreSetting = null,
        private array $marketplaceSettings = [],
        private ?string $productId = null,
    ) {
    }

    public function getProductIdType(): ProductIdType
    {
        return $this->productIdType;
    }

    public function setProductIdType(ProductIdType $productIdType): self
    {
        $this->productIdType = $productIdType;

        return $this;
    }

    public function getGlobalStoreSetting(): ?CreateGlobalStoreSettings
    {
        return $this->globalStoreSetting;
    }

    public function setGlobalStoreSetting(?CreateGlobalStoreSettings $globalStoreSetting): self
    {
        $this->globalStoreSetting = $globalStoreSetting;

        return $this;
    }

    /** @return CreateAdvertisedProductMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param CreateAdvertisedProductMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
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
                static fn(CreateAdvertisedProductMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }
        if ($this->productId !== null) {
            $data['productId'] = $this->productId;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productIdType: ProductIdType::from($data['productIdType']),
            globalStoreSetting: isset($data['globalStoreSetting']) ? CreateGlobalStoreSettings::fromArray($data['globalStoreSetting']) : null,
            marketplaceSettings: array_map(
                static fn(array $v) => CreateAdvertisedProductMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
            productId: $data['productId'] ?? null,
        );
    }
}

