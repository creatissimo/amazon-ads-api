<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductValue
{
    public function __construct(
        private ?string $productId = null,
        private array $marketplaceSettings = [],
    ) {
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

    /** @return ProductMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param ProductMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->productId !== null) {
            $data['productId'] = $this->productId;
        }
        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(ProductMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productId: $data['productId'] ?? null,
            marketplaceSettings: array_map(
                static fn(array $v) => ProductMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}

