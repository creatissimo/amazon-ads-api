<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryAdExtensionRequest
{
    public function __construct(
        private ?IncludeFilter $adExtensionIdFilter = null,
        private ?EnumIncludeFilter $adExtensionStatusFilter = null,
        private ?EnumIncludeFilter $adExtensionTypeFilter = null,
        private ?IncludeFilter $adGroupIdFilter = null,
        private ?IncludeFilter $adIdFilter = null,
        private ?EnumIncludeFilter $adProductFilter = null,
        private ?EnumIncludeFilter $stateFilter = null,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
    ) {
    }

    public function getAdExtensionIdFilter(): ?IncludeFilter
    {
        return $this->adExtensionIdFilter;
    }

    public function setAdExtensionIdFilter(?IncludeFilter $adExtensionIdFilter): self
    {
        $this->adExtensionIdFilter = $adExtensionIdFilter;

        return $this;
    }

    public function getAdExtensionStatusFilter(): ?EnumIncludeFilter
    {
        return $this->adExtensionStatusFilter;
    }

    public function setAdExtensionStatusFilter(?EnumIncludeFilter $adExtensionStatusFilter): self
    {
        $this->adExtensionStatusFilter = $adExtensionStatusFilter;

        return $this;
    }

    public function getAdExtensionTypeFilter(): ?EnumIncludeFilter
    {
        return $this->adExtensionTypeFilter;
    }

    public function setAdExtensionTypeFilter(?EnumIncludeFilter $adExtensionTypeFilter): self
    {
        $this->adExtensionTypeFilter = $adExtensionTypeFilter;

        return $this;
    }

    public function getAdGroupIdFilter(): ?IncludeFilter
    {
        return $this->adGroupIdFilter;
    }

    public function setAdGroupIdFilter(?IncludeFilter $adGroupIdFilter): self
    {
        $this->adGroupIdFilter = $adGroupIdFilter;

        return $this;
    }

    public function getAdIdFilter(): ?IncludeFilter
    {
        return $this->adIdFilter;
    }

    public function setAdIdFilter(?IncludeFilter $adIdFilter): self
    {
        $this->adIdFilter = $adIdFilter;

        return $this;
    }

    public function getAdProductFilter(): ?EnumIncludeFilter
    {
        return $this->adProductFilter;
    }

    public function setAdProductFilter(?EnumIncludeFilter $adProductFilter): self
    {
        $this->adProductFilter = $adProductFilter;

        return $this;
    }

    public function getStateFilter(): ?EnumIncludeFilter
    {
        return $this->stateFilter;
    }

    public function setStateFilter(?EnumIncludeFilter $stateFilter): self
    {
        $this->stateFilter = $stateFilter;

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

    public function toArray(): array
    {
        $data = [];

        $filters = [
            'adExtensionIdFilter' => $this->adExtensionIdFilter,
            'adExtensionStatusFilter' => $this->adExtensionStatusFilter,
            'adExtensionTypeFilter' => $this->adExtensionTypeFilter,
            'adGroupIdFilter' => $this->adGroupIdFilter,
            'adIdFilter' => $this->adIdFilter,
            'adProductFilter' => $this->adProductFilter,
            'stateFilter' => $this->stateFilter,
        ];

        foreach ($filters as $key => $filter) {
            if ($filter !== null) {
                $data[$key] = $filter->toArray();
            }
        }

        if ($this->maxResults !== null) {
            $data['maxResults'] = $this->maxResults;
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }
}

