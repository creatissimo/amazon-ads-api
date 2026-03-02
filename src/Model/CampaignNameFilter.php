<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignNameFilter
{
    /**
     * @param string[] $include
     */
    public function __construct(
        private array $include,
        private CampaignNameFilterType $queryTermMatchType,
    ) {
    }

    /** @return string[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param string[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function getQueryTermMatchType(): CampaignNameFilterType
    {
        return $this->queryTermMatchType;
    }

    public function setQueryTermMatchType(CampaignNameFilterType $queryTermMatchType): self
    {
        $this->queryTermMatchType = $queryTermMatchType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'include' => $this->include,
            'queryTermMatchType' => $this->queryTermMatchType->value,
        ];
    }
}
