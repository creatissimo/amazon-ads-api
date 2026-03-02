<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignGoalFilter
{
    /**
     * @param Goal[] $include
     */
    public function __construct(
        private array $include,
    ) {
    }

    /** @return Goal[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param Goal[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'include' => array_map(
                static fn(Goal $g) => $g->value,
                $this->include,
            ),
        ];
    }
}
