<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStorePageSuccessResponse
{
    public function __construct(
        private array $brandStorePages = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return BrandStorePage[] */
    public function getBrandStorePages(): array
    {
        return $this->brandStorePages;
    }

    /** @param BrandStorePage[] $brandStorePages */
    public function setBrandStorePages(array $brandStorePages): self
    {
        $this->brandStorePages = $brandStorePages;

        return $this;
    }

    public function getNextToken(): ?string
    {
        return $this->nextToken;
    }

    public function setNextToken(?string $nextToken): self
    {
        $this->nextToken = $nextToken;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandStorePages: array_map(
                static fn(array $v) => BrandStorePage::fromArray($v),
                $data['brandStorePages'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
