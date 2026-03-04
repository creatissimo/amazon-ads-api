<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCategoryRefinement
{
    public function __construct(
        private ?string $productAgeRangeId = null,
        private ?string $productAgeRangeIdResolved = null,
        private ?string $productBrandId = null,
        private ?string $productBrandIdResolved = null,
        private ?string $productCategoryId = null,
        private ?string $productCategoryIdResolved = null,
        private ?string $productGenreId = null,
        private ?float $productPriceGreaterThan = null,
        private ?float $productPriceLessThan = null,
        private ?bool $productPrimeShippingEligible = null,
        private ?float $productRatingGreaterThan = null,
        private ?float $productRatingLessThan = null,
    ) {
    }

    public function getProductAgeRangeId(): ?string
    {
        return $this->productAgeRangeId;
    }

    public function setProductAgeRangeId(?string $productAgeRangeId): self
    {
        $this->productAgeRangeId = $productAgeRangeId;

        return $this;
    }

    public function getProductAgeRangeIdResolved(): ?string
    {
        return $this->productAgeRangeIdResolved;
    }

    public function setProductAgeRangeIdResolved(?string $productAgeRangeIdResolved): self
    {
        $this->productAgeRangeIdResolved = $productAgeRangeIdResolved;

        return $this;
    }

    public function getProductBrandId(): ?string
    {
        return $this->productBrandId;
    }

    public function setProductBrandId(?string $productBrandId): self
    {
        $this->productBrandId = $productBrandId;

        return $this;
    }

    public function getProductBrandIdResolved(): ?string
    {
        return $this->productBrandIdResolved;
    }

    public function setProductBrandIdResolved(?string $productBrandIdResolved): self
    {
        $this->productBrandIdResolved = $productBrandIdResolved;

        return $this;
    }

    public function getProductCategoryId(): ?string
    {
        return $this->productCategoryId;
    }

    public function setProductCategoryId(?string $productCategoryId): self
    {
        $this->productCategoryId = $productCategoryId;

        return $this;
    }

    public function getProductCategoryIdResolved(): ?string
    {
        return $this->productCategoryIdResolved;
    }

    public function setProductCategoryIdResolved(?string $productCategoryIdResolved): self
    {
        $this->productCategoryIdResolved = $productCategoryIdResolved;

        return $this;
    }

    public function getProductGenreId(): ?string
    {
        return $this->productGenreId;
    }

    public function setProductGenreId(?string $productGenreId): self
    {
        $this->productGenreId = $productGenreId;

        return $this;
    }

    public function getProductPriceGreaterThan(): ?float
    {
        return $this->productPriceGreaterThan;
    }

    public function setProductPriceGreaterThan(?float $productPriceGreaterThan): self
    {
        $this->productPriceGreaterThan = $productPriceGreaterThan;

        return $this;
    }

    public function getProductPriceLessThan(): ?float
    {
        return $this->productPriceLessThan;
    }

    public function setProductPriceLessThan(?float $productPriceLessThan): self
    {
        $this->productPriceLessThan = $productPriceLessThan;

        return $this;
    }

    public function getProductPrimeShippingEligible(): ?bool
    {
        return $this->productPrimeShippingEligible;
    }

    public function setProductPrimeShippingEligible(?bool $productPrimeShippingEligible): self
    {
        $this->productPrimeShippingEligible = $productPrimeShippingEligible;

        return $this;
    }

    public function getProductRatingGreaterThan(): ?float
    {
        return $this->productRatingGreaterThan;
    }

    public function setProductRatingGreaterThan(?float $productRatingGreaterThan): self
    {
        $this->productRatingGreaterThan = $productRatingGreaterThan;

        return $this;
    }

    public function getProductRatingLessThan(): ?float
    {
        return $this->productRatingLessThan;
    }

    public function setProductRatingLessThan(?float $productRatingLessThan): self
    {
        $this->productRatingLessThan = $productRatingLessThan;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->productAgeRangeId !== null) {
            $data['productAgeRangeId'] = $this->productAgeRangeId;
        }
        if ($this->productAgeRangeIdResolved !== null) {
            $data['productAgeRangeIdResolved'] = $this->productAgeRangeIdResolved;
        }
        if ($this->productBrandId !== null) {
            $data['productBrandId'] = $this->productBrandId;
        }
        if ($this->productBrandIdResolved !== null) {
            $data['productBrandIdResolved'] = $this->productBrandIdResolved;
        }
        if ($this->productCategoryId !== null) {
            $data['productCategoryId'] = $this->productCategoryId;
        }
        if ($this->productCategoryIdResolved !== null) {
            $data['productCategoryIdResolved'] = $this->productCategoryIdResolved;
        }
        if ($this->productGenreId !== null) {
            $data['productGenreId'] = $this->productGenreId;
        }
        if ($this->productPriceGreaterThan !== null) {
            $data['productPriceGreaterThan'] = $this->productPriceGreaterThan;
        }
        if ($this->productPriceLessThan !== null) {
            $data['productPriceLessThan'] = $this->productPriceLessThan;
        }
        if ($this->productPrimeShippingEligible !== null) {
            $data['productPrimeShippingEligible'] = $this->productPrimeShippingEligible;
        }
        if ($this->productRatingGreaterThan !== null) {
            $data['productRatingGreaterThan'] = $this->productRatingGreaterThan;
        }
        if ($this->productRatingLessThan !== null) {
            $data['productRatingLessThan'] = $this->productRatingLessThan;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productAgeRangeId: $data['productAgeRangeId'] ?? null,
            productAgeRangeIdResolved: $data['productAgeRangeIdResolved'] ?? null,
            productBrandId: $data['productBrandId'] ?? null,
            productBrandIdResolved: $data['productBrandIdResolved'] ?? null,
            productCategoryId: $data['productCategoryId'] ?? null,
            productCategoryIdResolved: $data['productCategoryIdResolved'] ?? null,
            productGenreId: $data['productGenreId'] ?? null,
            productPriceGreaterThan: isset($data['productPriceGreaterThan']) ? (float) $data['productPriceGreaterThan'] : null,
            productPriceLessThan: isset($data['productPriceLessThan']) ? (float) $data['productPriceLessThan'] : null,
            productPrimeShippingEligible: $data['productPrimeShippingEligible'] ?? null,
            productRatingGreaterThan: isset($data['productRatingGreaterThan']) ? (float) $data['productRatingGreaterThan'] : null,
            productRatingLessThan: isset($data['productRatingLessThan']) ? (float) $data['productRatingLessThan'] : null,
        );
    }
}

