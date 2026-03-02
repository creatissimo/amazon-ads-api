<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignMarketplaceScopeFilter
{
    /**
     * @param MarketplaceScope[] $include
     */
    public function __construct(
        private array $include,
    ) {
    }

    /** @return MarketplaceScope[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param MarketplaceScope[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'include' => array_map(
                static fn(MarketplaceScope $m) => $m->value,
                $this->include,
            ),
        ];
    }
}
