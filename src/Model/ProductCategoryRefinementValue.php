<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductCategoryRefinementValue
{
    public function __construct(
        private ?ProductCategoryRefinement $productCategoryRefinement = null,
        private array $marketplaceSettings = [],
    ) {
    }

    public function getProductCategoryRefinement(): ?ProductCategoryRefinement
    {
        return $this->productCategoryRefinement;
    }

    public function setProductCategoryRefinement(?ProductCategoryRefinement $productCategoryRefinement): self
    {
        $this->productCategoryRefinement = $productCategoryRefinement;

        return $this;
    }

    /** @return ProductCategoryRefinementMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param ProductCategoryRefinementMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->productCategoryRefinement !== null) {
            $data['productCategoryRefinement'] = $this->productCategoryRefinement->toArray();
        }
        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(ProductCategoryRefinementMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCategoryRefinement: isset($data['productCategoryRefinement'])
                ? ProductCategoryRefinement::fromArray($data['productCategoryRefinement'])
                : null,
            marketplaceSettings: array_map(
                static fn(array $v) => ProductCategoryRefinementMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}

