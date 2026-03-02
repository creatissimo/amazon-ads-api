<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendationMultiStatusSuccess
{
    public function __construct(
        private int $index,
        private SBRecommendation $recommendation,
    ) {
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public function getRecommendation(): SBRecommendation
    {
        return $this->recommendation;
    }

    public function setRecommendation(SBRecommendation $recommendation): self
    {
        $this->recommendation = $recommendation;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            index: (int) $data['index'],
            recommendation: SBRecommendation::fromArray($data['recommendation']),
        );
    }
}
