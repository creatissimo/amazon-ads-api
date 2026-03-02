<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryAdGroupRequest
{
    public function __construct(
        private EnumIncludeFilter $adProductFilter,
        private ?IncludeFilter $adGroupIdFilter = null,
        private ?IncludeFilter $campaignIdFilter = null,
        private ?EnumIncludeFilter $marketplaceScopeFilter = null,
        private ?IncludeFilter $nameFilter = null,
        private ?EnumIncludeFilter $stateFilter = null,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
    ) {
    }

    public function getAdProductFilter(): EnumIncludeFilter
    {
        return $this->adProductFilter;
    }

    public function setAdProductFilter(EnumIncludeFilter $adProductFilter): self
    {
        $this->adProductFilter = $adProductFilter;

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

    public function getCampaignIdFilter(): ?IncludeFilter
    {
        return $this->campaignIdFilter;
    }

    public function setCampaignIdFilter(?IncludeFilter $campaignIdFilter): self
    {
        $this->campaignIdFilter = $campaignIdFilter;

        return $this;
    }

    public function getMarketplaceScopeFilter(): ?EnumIncludeFilter
    {
        return $this->marketplaceScopeFilter;
    }

    public function setMarketplaceScopeFilter(?EnumIncludeFilter $marketplaceScopeFilter): self
    {
        $this->marketplaceScopeFilter = $marketplaceScopeFilter;

        return $this;
    }

    public function getNameFilter(): ?IncludeFilter
    {
        return $this->nameFilter;
    }

    public function setNameFilter(?IncludeFilter $nameFilter): self
    {
        $this->nameFilter = $nameFilter;

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
        $data = [
            'adProductFilter' => $this->adProductFilter->toArray(),
        ];

        if ($this->adGroupIdFilter !== null) {
            $data['adGroupIdFilter'] = $this->adGroupIdFilter->toArray();
        }
        if ($this->campaignIdFilter !== null) {
            $data['campaignIdFilter'] = $this->campaignIdFilter->toArray();
        }
        if ($this->marketplaceScopeFilter !== null) {
            $data['marketplaceScopeFilter'] = $this->marketplaceScopeFilter->toArray();
        }
        if ($this->nameFilter !== null) {
            $data['nameFilter'] = $this->nameFilter->toArray();
        }
        if ($this->stateFilter !== null) {
            $data['stateFilter'] = $this->stateFilter->toArray();
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

