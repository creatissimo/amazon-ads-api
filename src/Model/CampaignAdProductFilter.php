<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignAdProductFilter
{
    /**
     * @param AdProduct[] $include
     */
    public function __construct(
        private array $include,
    ) {
    }

    /** @return AdProduct[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param AdProduct[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'include' => array_map(
                static fn(AdProduct $p) => $p->value,
                $this->include,
            ),
        ];
    }
}
