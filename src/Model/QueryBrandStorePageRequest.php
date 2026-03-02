<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryBrandStorePageRequest
{
    public function __construct(
        private BrandStorePageBrandStoreEditionIdFilter $editionIdFilter,
        private BrandStorePagePageIdFilter $pageIdFilter,
        private BrandStorePageBrandStoreIdFilter $storeIdFilter,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
        private ?BrandStorePageBrandStoreEditionPublishVersionIdFilter $storeEditionPublishIdFilter = null,
    ) {
    }

    public function getEditionIdFilter(): BrandStorePageBrandStoreEditionIdFilter
    {
        return $this->editionIdFilter;
    }

    public function setEditionIdFilter(BrandStorePageBrandStoreEditionIdFilter $editionIdFilter): self
    {
        $this->editionIdFilter = $editionIdFilter;

        return $this;
    }

    public function getPageIdFilter(): BrandStorePagePageIdFilter
    {
        return $this->pageIdFilter;
    }

    public function setPageIdFilter(BrandStorePagePageIdFilter $pageIdFilter): self
    {
        $this->pageIdFilter = $pageIdFilter;

        return $this;
    }

    public function getStoreIdFilter(): BrandStorePageBrandStoreIdFilter
    {
        return $this->storeIdFilter;
    }

    public function setStoreIdFilter(BrandStorePageBrandStoreIdFilter $storeIdFilter): self
    {
        $this->storeIdFilter = $storeIdFilter;

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

    public function getStoreEditionPublishIdFilter(): ?BrandStorePageBrandStoreEditionPublishVersionIdFilter
    {
        return $this->storeEditionPublishIdFilter;
    }

    public function setStoreEditionPublishIdFilter(?BrandStorePageBrandStoreEditionPublishVersionIdFilter $storeEditionPublishIdFilter): self
    {
        $this->storeEditionPublishIdFilter = $storeEditionPublishIdFilter;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'editionIdFilter' => $this->editionIdFilter->toArray(),
            'pageIdFilter' => $this->pageIdFilter->toArray(),
            'storeIdFilter' => $this->storeIdFilter->toArray(),
        ];

        if ($this->maxResults !== null) {
            $data['maxResults'] = $this->maxResults;
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }
        if ($this->storeEditionPublishIdFilter !== null) {
            $data['storeEditionPublishIdFilter'] = $this->storeEditionPublishIdFilter->toArray();
        }

        return $data;
    }
}
