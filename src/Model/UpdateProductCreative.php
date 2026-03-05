<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateProductCreative
{
    public function __construct(
        private ?array $productCreativeSettings = null,
    ) {
    }

    public function getProductCreativeSettings(): ?array
    {
        return $this->productCreativeSettings;
    }

    public function setProductCreativeSettings(?array $productCreativeSettings): self
    {
        $this->productCreativeSettings = $productCreativeSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->productCreativeSettings !== null) {
            $data['productCreativeSettings'] = $this->productCreativeSettings;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCreativeSettings: $data['productCreativeSettings'] ?? null,
        );
    }
}

