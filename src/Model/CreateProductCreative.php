<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCreative
{
    public function __construct(
        private CreateProductCreativeSettings $productCreativeSettings,
    ) {
    }

    public function getProductCreativeSettings(): CreateProductCreativeSettings
    {
        return $this->productCreativeSettings;
    }

    public function setProductCreativeSettings(CreateProductCreativeSettings $productCreativeSettings): self
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
            productCreativeSettings: CreateProductCreativeSettings::fromArray($data['productCreativeSettings']),
        );
    }
}
