<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductCategoryTarget
{
    public function __construct(
        private ProductCategoryRefinementValue $productCategoryRefinement,
        private ?ProductGenreRefinement $productGenreRefinement = null,
    ) {
    }

    public function getProductCategoryRefinement(): ProductCategoryRefinementValue
    {
        return $this->productCategoryRefinement;
    }

    public function setProductCategoryRefinement(ProductCategoryRefinementValue $productCategoryRefinement): self
    {
        $this->productCategoryRefinement = $productCategoryRefinement;

        return $this;
    }

    public function getProductGenreRefinement(): ?ProductGenreRefinement
    {
        return $this->productGenreRefinement;
    }

    public function setProductGenreRefinement(?ProductGenreRefinement $productGenreRefinement): self
    {
        $this->productGenreRefinement = $productGenreRefinement;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCategoryRefinement: ProductCategoryRefinementValue::fromArray($data['productCategoryRefinement']),
            productGenreRefinement: isset($data['productGenreRefinement'])
                ? ProductGenreRefinement::fromArray($data['productGenreRefinement'])
                : null,
        );
    }
}

