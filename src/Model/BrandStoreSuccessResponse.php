<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreSuccessResponse
{
    public function __construct(
        private array $brandStores = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return BrandStore[] */
    public function getBrandStores(): array
    {
        return $this->brandStores;
    }

    /** @param BrandStore[] $brandStores */
    public function setBrandStores(array $brandStores): self
    {
        $this->brandStores = $brandStores;

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

    public function toArray(): array
    {
        $data = [];

        if ($this->brandStores !== []) {
            $data['brandStores'] = array_map(
                static fn(BrandStore $v) => $v->toArray(),
                $this->brandStores,
            );
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandStores: array_map(
                static fn(array $v) => BrandStore::fromArray($v),
                $data['brandStores'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
