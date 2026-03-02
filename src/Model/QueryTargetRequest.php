<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryTargetRequest
{
    public function __construct(
        private EnumIncludeFilter $adProductFilter,
        private ?IncludeFilter $adGroupIdFilter = null,
        private ?IncludeFilter $campaignIdFilter = null,
        private ?IncludeFilter $targetIdFilter = null,
        private ?IncludeFilter $keywordFilter = null,
        private ?IncludeFilter $productIdFilter = null,
        private ?EnumIncludeFilter $marketplaceScopeFilter = null,
        private ?EnumIncludeFilter $stateFilter = null,
        private ?EnumIncludeFilter $targetTypeFilter = null,
        private ?EnumIncludeFilter $matchTypeFilter = null,
        private ?EnumIncludeFilter $negativeFilter = null,
        private ?IncludeFilter $nativeLanguageLocaleFilter = null,
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

    public function getTargetIdFilter(): ?IncludeFilter
    {
        return $this->targetIdFilter;
    }

    public function setTargetIdFilter(?IncludeFilter $targetIdFilter): self
    {
        $this->targetIdFilter = $targetIdFilter;

        return $this;
    }

    public function getKeywordFilter(): ?IncludeFilter
    {
        return $this->keywordFilter;
    }

    public function setKeywordFilter(?IncludeFilter $keywordFilter): self
    {
        $this->keywordFilter = $keywordFilter;

        return $this;
    }

    public function getProductIdFilter(): ?IncludeFilter
    {
        return $this->productIdFilter;
    }

    public function setProductIdFilter(?IncludeFilter $productIdFilter): self
    {
        $this->productIdFilter = $productIdFilter;

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

    public function getStateFilter(): ?EnumIncludeFilter
    {
        return $this->stateFilter;
    }

    public function setStateFilter(?EnumIncludeFilter $stateFilter): self
    {
        $this->stateFilter = $stateFilter;

        return $this;
    }

    public function getTargetTypeFilter(): ?EnumIncludeFilter
    {
        return $this->targetTypeFilter;
    }

    public function setTargetTypeFilter(?EnumIncludeFilter $targetTypeFilter): self
    {
        $this->targetTypeFilter = $targetTypeFilter;

        return $this;
    }

    public function getMatchTypeFilter(): ?EnumIncludeFilter
    {
        return $this->matchTypeFilter;
    }

    public function setMatchTypeFilter(?EnumIncludeFilter $matchTypeFilter): self
    {
        $this->matchTypeFilter = $matchTypeFilter;

        return $this;
    }

    public function getNegativeFilter(): ?EnumIncludeFilter
    {
        return $this->negativeFilter;
    }

    public function setNegativeFilter(?EnumIncludeFilter $negativeFilter): self
    {
        $this->negativeFilter = $negativeFilter;

        return $this;
    }

    public function getNativeLanguageLocaleFilter(): ?IncludeFilter
    {
        return $this->nativeLanguageLocaleFilter;
    }

    public function setNativeLanguageLocaleFilter(?IncludeFilter $nativeLanguageLocaleFilter): self
    {
        $this->nativeLanguageLocaleFilter = $nativeLanguageLocaleFilter;

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

        $filters = [
            'adGroupIdFilter' => $this->adGroupIdFilter,
            'campaignIdFilter' => $this->campaignIdFilter,
            'targetIdFilter' => $this->targetIdFilter,
            'keywordFilter' => $this->keywordFilter,
            'productIdFilter' => $this->productIdFilter,
            'marketplaceScopeFilter' => $this->marketplaceScopeFilter,
            'stateFilter' => $this->stateFilter,
            'targetTypeFilter' => $this->targetTypeFilter,
            'matchTypeFilter' => $this->matchTypeFilter,
            'negativeFilter' => $this->negativeFilter,
            'nativeLanguageLocaleFilter' => $this->nativeLanguageLocaleFilter,
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

