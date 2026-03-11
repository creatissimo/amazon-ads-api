<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEditionSuccessResponse
{
    public function __construct(
        private array $brandStoreEditions = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return BrandStoreEdition[] */
    public function getBrandStoreEditions(): array
    {
        return $this->brandStoreEditions;
    }

    /** @param BrandStoreEdition[] $brandStoreEditions */
    public function setBrandStoreEditions(array $brandStoreEditions): self
    {
        $this->brandStoreEditions = $brandStoreEditions;

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

        if ($this->brandStoreEditions !== []) {
            $data['brandStoreEditions'] = array_map(
                static fn(BrandStoreEdition $v) => $v->toArray(),
                $this->brandStoreEditions,
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
            brandStoreEditions: array_map(
                static fn(array $v) => BrandStoreEdition::fromArray($v),
                $data['brandStoreEditions'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
