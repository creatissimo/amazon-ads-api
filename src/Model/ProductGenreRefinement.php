<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductGenreRefinement
{
    public function __construct(
        private string $productGenreId,
        private ?string $productGenreIdResolved = null,
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

    public function getProductGenreIdResolved(): ?string
    {
        return $this->productGenreIdResolved;
    }

    public function setProductGenreIdResolved(?string $productGenreIdResolved): self
    {
        $this->productGenreIdResolved = $productGenreIdResolved;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            productGenreId: $data['productGenreId'],
            productGenreIdResolved: $data['productGenreIdResolved'] ?? null,
        );
    }
}

