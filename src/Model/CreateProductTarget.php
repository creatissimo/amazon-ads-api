<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductTarget
{
    public function __construct(
        private ProductMatchType $matchType,
        private CreateProductValue $product,
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

    public function getProduct(): CreateProductValue
    {
        return $this->product;
    }

    public function setProduct(CreateProductValue $product): self
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

    public function toArray(): array
    {
        return [
            'matchType' => $this->matchType->value,
            'product' => $this->product->toArray(),
            'productIdType' => $this->productIdType->value,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            matchType: ProductMatchType::from($data['matchType']),
            product: CreateProductValue::fromArray($data['product']),
            productIdType: ProductIdType::from($data['productIdType']),
        );
    }
}

