<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryCampaignRequest
{
    public function __construct(
        private CampaignAdProductFilter $adProductFilter,
        private ?CampaignCampaignIdFilter $campaignIdFilter = null,
        private ?CampaignStateFilter $stateFilter = null,
        private ?CampaignNameFilter $nameFilter = null,
        private ?CampaignGoalFilter $goalFilter = null,
        private ?CampaignPortfolioIdFilter $portfolioIdFilter = null,
        private ?CampaignMarketplaceScopeFilter $marketplaceScopeFilter = null,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
    ) {
    }

    public function getAdProductFilter(): CampaignAdProductFilter
    {
        return $this->adProductFilter;
    }

    public function setAdProductFilter(CampaignAdProductFilter $adProductFilter): self
    {
        $this->adProductFilter = $adProductFilter;

        return $this;
    }

    public function getCampaignIdFilter(): ?CampaignCampaignIdFilter
    {
        return $this->campaignIdFilter;
    }

    public function setCampaignIdFilter(?CampaignCampaignIdFilter $campaignIdFilter): self
    {
        $this->campaignIdFilter = $campaignIdFilter;

        return $this;
    }

    public function getStateFilter(): ?CampaignStateFilter
    {
        return $this->stateFilter;
    }

    public function setStateFilter(?CampaignStateFilter $stateFilter): self
    {
        $this->stateFilter = $stateFilter;

        return $this;
    }

    public function getNameFilter(): ?CampaignNameFilter
    {
        return $this->nameFilter;
    }

    public function setNameFilter(?CampaignNameFilter $nameFilter): self
    {
        $this->nameFilter = $nameFilter;

        return $this;
    }

    public function getGoalFilter(): ?CampaignGoalFilter
    {
        return $this->goalFilter;
    }

    public function setGoalFilter(?CampaignGoalFilter $goalFilter): self
    {
        $this->goalFilter = $goalFilter;

        return $this;
    }

    public function getPortfolioIdFilter(): ?CampaignPortfolioIdFilter
    {
        return $this->portfolioIdFilter;
    }

    public function setPortfolioIdFilter(?CampaignPortfolioIdFilter $portfolioIdFilter): self
    {
        $this->portfolioIdFilter = $portfolioIdFilter;

        return $this;
    }

    public function getMarketplaceScopeFilter(): ?CampaignMarketplaceScopeFilter
    {
        return $this->marketplaceScopeFilter;
    }

    public function setMarketplaceScopeFilter(?CampaignMarketplaceScopeFilter $marketplaceScopeFilter): self
    {
        $this->marketplaceScopeFilter = $marketplaceScopeFilter;

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

        if ($this->campaignIdFilter !== null) {
            $data['campaignIdFilter'] = $this->campaignIdFilter->toArray();
        }
        if ($this->stateFilter !== null) {
            $data['stateFilter'] = $this->stateFilter->toArray();
        }
        if ($this->nameFilter !== null) {
            $data['nameFilter'] = $this->nameFilter->toArray();
        }
        if ($this->goalFilter !== null) {
            $data['goalFilter'] = $this->goalFilter->toArray();
        }
        if ($this->portfolioIdFilter !== null) {
            $data['portfolioIdFilter'] = $this->portfolioIdFilter->toArray();
        }
        if ($this->marketplaceScopeFilter !== null) {
            $data['marketplaceScopeFilter'] = $this->marketplaceScopeFilter->toArray();
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
