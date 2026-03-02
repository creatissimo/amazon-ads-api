<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateRecommendationRequest
{
    public function __construct(
        private array $recommendations = [],
    ) {
    }

    /** @return SBRecommendationCreate[] */
    public function getRecommendations(): array
    {
        return $this->recommendations;
    }

    /** @param SBRecommendationCreate[] $recommendations */
    public function setRecommendations(array $recommendations): self
    {
        $this->recommendations = $recommendations;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->recommendations !== []) {
            $data['recommendations'] = array_map(
                static fn(SBRecommendationCreate $v) => $v->toArray(),
                $this->recommendations,
            );
        }

        return $data;
    }
}
