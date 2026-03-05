<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductCreative
{
    public function __construct(
        private ProductCreativeSettings $productCreativeSettings,
    ) {
    }

    public function getProductCreativeSettings(): ProductCreativeSettings
    {
        return $this->productCreativeSettings;
    }

    public function setProductCreativeSettings(ProductCreativeSettings $productCreativeSettings): self
    {
        $this->productCreativeSettings = $productCreativeSettings;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'productCreativeSettings' => $this->productCreativeSettings->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCreativeSettings: ProductCreativeSettings::fromArray($data['productCreativeSettings']),
        );
    }
}
