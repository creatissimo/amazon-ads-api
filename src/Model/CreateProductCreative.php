<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCreative
{
    public function __construct(
        private array $productCreativeSettings,
    ) {
    }

    public function getProductCreativeSettings(): array
    {
        return $this->productCreativeSettings;
    }

    public function setProductCreativeSettings(array $productCreativeSettings): self
    {
        $this->productCreativeSettings = $productCreativeSettings;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'productCreativeSettings' => $this->productCreativeSettings,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCreativeSettings: $data['productCreativeSettings'],
        );
    }
}

