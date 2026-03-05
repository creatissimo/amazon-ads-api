<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateComponentCreative
{
    public function __construct(
        private ?array $assetBasedCreativeSettings = null,
        private ?array $autoCollectionSettings = null,
        private ?array $brandStoreSettings = null,
        private ?array $manualCollectionSettings = null,
        private ?array $productCollectionSettings = null,
        private ?array $productVideoSettings = null,
        private ?array $responsiveEcommerceSettings = null,
        private ?array $storeSpotlightSettings = null,
    ) {
    }

    public function getAssetBasedCreativeSettings(): ?array
    {
        return $this->assetBasedCreativeSettings;
    }

    public function setAssetBasedCreativeSettings(?array $assetBasedCreativeSettings): self
    {
        $this->assetBasedCreativeSettings = $assetBasedCreativeSettings;

        return $this;
    }

    public function getAutoCollectionSettings(): ?array
    {
        return $this->autoCollectionSettings;
    }

    public function setAutoCollectionSettings(?array $autoCollectionSettings): self
    {
        $this->autoCollectionSettings = $autoCollectionSettings;

        return $this;
    }

    public function getBrandStoreSettings(): ?array
    {
        return $this->brandStoreSettings;
    }

    public function setBrandStoreSettings(?array $brandStoreSettings): self
    {
        $this->brandStoreSettings = $brandStoreSettings;

        return $this;
    }

    public function getManualCollectionSettings(): ?array
    {
        return $this->manualCollectionSettings;
    }

    public function setManualCollectionSettings(?array $manualCollectionSettings): self
    {
        $this->manualCollectionSettings = $manualCollectionSettings;

        return $this;
    }

    public function getProductCollectionSettings(): ?array
    {
        return $this->productCollectionSettings;
    }

    public function setProductCollectionSettings(?array $productCollectionSettings): self
    {
        $this->productCollectionSettings = $productCollectionSettings;

        return $this;
    }

    public function getProductVideoSettings(): ?array
    {
        return $this->productVideoSettings;
    }

    public function setProductVideoSettings(?array $productVideoSettings): self
    {
        $this->productVideoSettings = $productVideoSettings;

        return $this;
    }

    public function getResponsiveEcommerceSettings(): ?array
    {
        return $this->responsiveEcommerceSettings;
    }

    public function setResponsiveEcommerceSettings(?array $responsiveEcommerceSettings): self
    {
        $this->responsiveEcommerceSettings = $responsiveEcommerceSettings;

        return $this;
    }

    public function getStoreSpotlightSettings(): ?array
    {
        return $this->storeSpotlightSettings;
    }

    public function setStoreSpotlightSettings(?array $storeSpotlightSettings): self
    {
        $this->storeSpotlightSettings = $storeSpotlightSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->assetBasedCreativeSettings !== null) {
            $data['assetBasedCreativeSettings'] = $this->assetBasedCreativeSettings;
        }
        if ($this->autoCollectionSettings !== null) {
            $data['autoCollectionSettings'] = $this->autoCollectionSettings;
        }
        if ($this->brandStoreSettings !== null) {
            $data['brandStoreSettings'] = $this->brandStoreSettings;
        }
        if ($this->manualCollectionSettings !== null) {
            $data['manualCollectionSettings'] = $this->manualCollectionSettings;
        }
        if ($this->productCollectionSettings !== null) {
            $data['productCollectionSettings'] = $this->productCollectionSettings;
        }
        if ($this->productVideoSettings !== null) {
            $data['productVideoSettings'] = $this->productVideoSettings;
        }
        if ($this->responsiveEcommerceSettings !== null) {
            $data['responsiveEcommerceSettings'] = $this->responsiveEcommerceSettings;
        }
        if ($this->storeSpotlightSettings !== null) {
            $data['storeSpotlightSettings'] = $this->storeSpotlightSettings;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            assetBasedCreativeSettings: $data['assetBasedCreativeSettings'] ?? null,
            autoCollectionSettings: $data['autoCollectionSettings'] ?? null,
            brandStoreSettings: $data['brandStoreSettings'] ?? null,
            manualCollectionSettings: $data['manualCollectionSettings'] ?? null,
            productCollectionSettings: $data['productCollectionSettings'] ?? null,
            productVideoSettings: $data['productVideoSettings'] ?? null,
            responsiveEcommerceSettings: $data['responsiveEcommerceSettings'] ?? null,
            storeSpotlightSettings: $data['storeSpotlightSettings'] ?? null,
        );
    }
}

