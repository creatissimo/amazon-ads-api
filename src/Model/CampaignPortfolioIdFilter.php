<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignPortfolioIdFilter
{
    /**
     * @param string[] $include
     */
    public function __construct(
        private array $include,
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

    public function toArray(): array
    {
        return ['include' => $this->include];
    }
}
