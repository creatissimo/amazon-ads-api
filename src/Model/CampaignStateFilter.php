<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignStateFilter
{
    /**
     * @param State[] $include
     */
    public function __construct(
        private array $include,
    ) {
    }

    /** @return State[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param State[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'include' => array_map(
                static fn(State $s) => $s->value,
                $this->include,
            ),
        ];
    }
}
