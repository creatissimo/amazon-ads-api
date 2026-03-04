<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductCategoryRefinement
{
    public function __construct(
        private ?string $productAgeRangeId = null,
        private ?string $productAgeRangeIdResolved = null,
        private ?string $productBrandId = null,
        private ?string $productBrandIdResolved = null,
        private ?string $productCategoryId = null,
        private ?string $productCategoryIdResolved = null,
        private ?string $productGenreId = null,
        private ?string $productGenreIdResolved = null,
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

    public function getProductGenreIdResolved(): ?string
    {
        return $this->productGenreIdResolved;
    }

    public function setProductGenreIdResolved(?string $productGenreIdResolved): self
    {
        $this->productGenreIdResolved = $productGenreIdResolved;

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
            productGenreIdResolved: $data['productGenreIdResolved'] ?? null,
            productPriceGreaterThan: isset($data['productPriceGreaterThan']) ? (float) $data['productPriceGreaterThan'] : null,
            productPriceLessThan: isset($data['productPriceLessThan']) ? (float) $data['productPriceLessThan'] : null,
            productPrimeShippingEligible: $data['productPrimeShippingEligible'] ?? null,
            productRatingGreaterThan: isset($data['productRatingGreaterThan']) ? (float) $data['productRatingGreaterThan'] : null,
            productRatingLessThan: isset($data['productRatingLessThan']) ? (float) $data['productRatingLessThan'] : null,
        );
    }
}

