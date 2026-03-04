<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductCategoryRefinementMarketplaceSetting
{
    public function __construct(
        private Marketplace $marketplace,
        private ProductCategoryRefinement $productCategoryRefinement,
    ) {
    }

    public function getMarketplace(): Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(Marketplace $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getProductCategoryRefinement(): ProductCategoryRefinement
    {
        return $this->productCategoryRefinement;
    }

    public function setProductCategoryRefinement(ProductCategoryRefinement $productCategoryRefinement): self
    {
        $this->productCategoryRefinement = $productCategoryRefinement;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            productCategoryRefinement: ProductCategoryRefinement::fromArray($data['productCategoryRefinement']),
        );
    }
}

