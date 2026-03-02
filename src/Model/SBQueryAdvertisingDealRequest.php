<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBQueryAdvertisingDealRequest
{
    public function __construct(
        private ?SBAdvertisingDealAdvertisingDealIdFilter $advertisingDealIdFilter = null,
        private ?int $maxResults = null,
        private ?SBAdvertisingDealNameFilter $nameFilter = null,
        private ?string $nextToken = null,
    ) {
    }

    public function getAdvertisingDealIdFilter(): ?SBAdvertisingDealAdvertisingDealIdFilter
    {
        return $this->advertisingDealIdFilter;
    }

    public function setAdvertisingDealIdFilter(?SBAdvertisingDealAdvertisingDealIdFilter $advertisingDealIdFilter): self
    {
        $this->advertisingDealIdFilter = $advertisingDealIdFilter;

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

    public function getNameFilter(): ?SBAdvertisingDealNameFilter
    {
        return $this->nameFilter;
    }

    public function setNameFilter(?SBAdvertisingDealNameFilter $nameFilter): self
    {
        $this->nameFilter = $nameFilter;

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

        if ($this->advertisingDealIdFilter !== null) {
            $data['advertisingDealIdFilter'] = $this->advertisingDealIdFilter->toArray();
        }
        if ($this->maxResults !== null) {
            $data['maxResults'] = $this->maxResults;
        }
        if ($this->nameFilter !== null) {
            $data['nameFilter'] = $this->nameFilter->toArray();
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }
}
