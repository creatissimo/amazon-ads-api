<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCategoryTarget
{
    public function __construct(
        private CreateProductCategoryRefinementValue $productCategoryRefinement,
        private ?CreateProductGenreRefinement $productGenreRefinement = null,
    ) {
    }

    public function getProductCategoryRefinement(): CreateProductCategoryRefinementValue
    {
        return $this->productCategoryRefinement;
    }

    public function setProductCategoryRefinement(CreateProductCategoryRefinementValue $productCategoryRefinement): self
    {
        $this->productCategoryRefinement = $productCategoryRefinement;

        return $this;
    }

    public function getProductGenreRefinement(): ?CreateProductGenreRefinement
    {
        return $this->productGenreRefinement;
    }

    public function setProductGenreRefinement(?CreateProductGenreRefinement $productGenreRefinement): self
    {
        $this->productGenreRefinement = $productGenreRefinement;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'productCategoryRefinement' => $this->productCategoryRefinement->toArray(),
        ];

        if ($this->productGenreRefinement !== null) {
            $data['productGenreRefinement'] = $this->productGenreRefinement->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productCategoryRefinement: CreateProductCategoryRefinementValue::fromArray($data['productCategoryRefinement']),
            productGenreRefinement: isset($data['productGenreRefinement'])
                ? CreateProductGenreRefinement::fromArray($data['productGenreRefinement'])
                : null,
        );
    }
}

