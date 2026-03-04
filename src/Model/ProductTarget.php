<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductTarget
{
    public function __construct(
        private ProductMatchType $matchType,
        private ProductValue $product,
        private ProductIdType $productIdType,
    ) {
    }

    public function getMatchType(): ProductMatchType
    {
        return $this->matchType;
    }

    public function setMatchType(ProductMatchType $matchType): self
    {
        $this->matchType = $matchType;

        return $this;
    }

    public function getProduct(): ProductValue
    {
        return $this->product;
    }

    public function setProduct(ProductValue $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getProductIdType(): ProductIdType
    {
        return $this->productIdType;
    }

    public function setProductIdType(ProductIdType $productIdType): self
    {
        $this->productIdType = $productIdType;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            matchType: ProductMatchType::from($data['matchType']),
            product: ProductValue::fromArray($data['product']),
            productIdType: ProductIdType::from($data['productIdType']),
        );
    }
}

