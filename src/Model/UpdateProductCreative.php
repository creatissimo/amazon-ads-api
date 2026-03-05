<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateProductCreative
{
    public function __construct(
        private ?UpdateProductCreativeSettings $productCreativeSettings = null,
    ) {
    }

    public function getProductCreativeSettings(): ?UpdateProductCreativeSettings
    {
        return $this->productCreativeSettings;
    }

    public function setProductCreativeSettings(?UpdateProductCreativeSettings $productCreativeSettings): self
    {
        $this->productCreativeSettings = $productCreativeSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->productCreativeSettings !== null) {
            $data['productCreativeSettings'] = $this->productCreativeSettings->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCreativeSettings: isset($data['productCreativeSettings']) ? UpdateProductCreativeSettings::fromArray($data['productCreativeSettings']) : null,
        );
    }
}
