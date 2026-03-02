<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBQueryAdvertisingDealTargetRequest
{
    public function __construct(
        private SBAdvertisingDealTargetAdvertisingDealIdFilter $advertisingDealIdFilter,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
    ) {
    }

    public function getAdvertisingDealIdFilter(): SBAdvertisingDealTargetAdvertisingDealIdFilter
    {
        return $this->advertisingDealIdFilter;
    }

    public function setAdvertisingDealIdFilter(SBAdvertisingDealTargetAdvertisingDealIdFilter $advertisingDealIdFilter): self
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
            'advertisingDealIdFilter' => $this->advertisingDealIdFilter->toArray(),
        ];

        if ($this->maxResults !== null) {
            $data['maxResults'] = $this->maxResults;
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }
}
