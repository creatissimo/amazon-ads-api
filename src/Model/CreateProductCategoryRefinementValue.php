<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCategoryRefinementValue
{
    public function __construct(
        private array $marketplaceSettings = [],
        private ?CreateProductCategoryRefinement $productCategoryRefinement = null,
    ) {
    }

    /** @return CreateProductCategoryRefinementMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param CreateProductCategoryRefinementMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function getProductCategoryRefinement(): ?CreateProductCategoryRefinement
    {
        return $this->productCategoryRefinement;
    }

    public function setProductCategoryRefinement(?CreateProductCategoryRefinement $productCategoryRefinement): self
    {
        $this->productCategoryRefinement = $productCategoryRefinement;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(CreateProductCategoryRefinementMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }
        if ($this->productCategoryRefinement !== null) {
            $data['productCategoryRefinement'] = $this->productCategoryRefinement->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplaceSettings: array_map(
                static fn(array $v) => CreateProductCategoryRefinementMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
            productCategoryRefinement: isset($data['productCategoryRefinement'])
                ? CreateProductCategoryRefinement::fromArray($data['productCategoryRefinement'])
                : null,
        );
    }
}

