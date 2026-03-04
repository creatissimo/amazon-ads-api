<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCategoryRefinementMarketplaceSetting
{
    public function __construct(
        private Marketplace $marketplace,
        private CreateProductCategoryRefinement $productCategoryRefinement,
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

    public function getProductCategoryRefinement(): CreateProductCategoryRefinement
    {
        return $this->productCategoryRefinement;
    }

    public function setProductCategoryRefinement(CreateProductCategoryRefinement $productCategoryRefinement): self
    {
        $this->productCategoryRefinement = $productCategoryRefinement;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'marketplace' => $this->marketplace->value,
            'productCategoryRefinement' => $this->productCategoryRefinement->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            productCategoryRefinement: CreateProductCategoryRefinement::fromArray($data['productCategoryRefinement']),
        );
    }
}

