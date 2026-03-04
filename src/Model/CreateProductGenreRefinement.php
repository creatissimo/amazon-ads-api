<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductGenreRefinement
{
    public function __construct(
        private string $productGenreId,
    ) {
    }

    public function getProductGenreId(): string
    {
        return $this->productGenreId;
    }

    public function setProductGenreId(string $productGenreId): self
    {
        $this->productGenreId = $productGenreId;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'productGenreId' => $this->productGenreId,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productGenreId: $data['productGenreId'],
        );
    }
}

