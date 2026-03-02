<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryBrandStoreRequest
{
    public function __construct(
        private BrandStoreStoreNameFilter $storeNameFilter,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
        private array $sort = [],
    ) {
    }

    public function getStoreNameFilter(): BrandStoreStoreNameFilter
    {
        return $this->storeNameFilter;
    }

    public function setStoreNameFilter(BrandStoreStoreNameFilter $storeNameFilter): self
    {
        $this->storeNameFilter = $storeNameFilter;

        return $this;
    }

    public function getMaxResults(): ?int
    {
        return $this->maxResults;
    }

    public function setMaxResults(?int $maxResults): self
    {
        $this->maxResults = $maxResults;

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

    /** @return BrandStoreSortOption[] */
    public function getSort(): array
    {
        return $this->sort;
    }

    /** @param BrandStoreSortOption[] $sort */
    public function setSort(array $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'storeNameFilter' => $this->storeNameFilter->toArray(),
        ];

        if ($this->maxResults !== null) {
            $data['maxResults'] = $this->maxResults;
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }
        if ($this->sort !== []) {
            $data['sort'] = array_map(
                static fn(BrandStoreSortOption $v) => $v->toArray(),
                $this->sort,
            );
        }

        return $data;
    }
}
