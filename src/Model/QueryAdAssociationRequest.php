<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class QueryAdAssociationRequest
{
    public function __construct(
        private ?IncludeFilter $adAssociationIdFilter = null,
        private ?IncludeFilter $adGroupIdFilter = null,
        private ?IncludeFilter $adIdFilter = null,
        private ?int $maxResults = null,
        private ?string $nextToken = null,
    ) {
    }

    public function getAdAssociationIdFilter(): ?IncludeFilter
    {
        return $this->adAssociationIdFilter;
    }

    public function setAdAssociationIdFilter(?IncludeFilter $adAssociationIdFilter): self
    {
        $this->adAssociationIdFilter = $adAssociationIdFilter;

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

        if ($this->adAssociationIdFilter !== null) {
            $data['adAssociationIdFilter'] = $this->adAssociationIdFilter->toArray();
        }
        if ($this->adGroupIdFilter !== null) {
            $data['adGroupIdFilter'] = $this->adGroupIdFilter->toArray();
        }
        if ($this->adIdFilter !== null) {
            $data['adIdFilter'] = $this->adIdFilter->toArray();
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

