<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdvertisedProductMarketplaceSetting
{
    public function __construct(
        private Marketplace $marketplace,
        private string $productId,
        private ?CreateGlobalStoreSettings $globalStoreSetting = null,
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

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): self
    {
        $this->productId = $productId;

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

    public function toArray(): array
    {
        $data = [
            'marketplace' => $this->marketplace->value,
            'productId' => $this->productId,
        ];

        if ($this->globalStoreSetting !== null) {
            $data['globalStoreSetting'] = $this->globalStoreSetting->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            productId: $data['productId'],
            globalStoreSetting: isset($data['globalStoreSetting']) ? CreateGlobalStoreSettings::fromArray($data['globalStoreSetting']) : null,
        );
    }
}

