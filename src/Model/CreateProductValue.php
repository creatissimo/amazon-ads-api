<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductValue
{
    public function __construct(
        private array $marketplaceSettings = [],
        private ?string $productId = null,
    ) {
    }

    /** @return CreateProductMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param CreateProductMarketplaceSetting[] $marketplaceSettings */
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
        $data = [];

        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(CreateProductMarketplaceSetting $v) => $v->toArray(),
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
            marketplaceSettings: array_map(
                static fn(array $v) => CreateProductMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
            productId: $data['productId'] ?? null,
        );
    }
}

