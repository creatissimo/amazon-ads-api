<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendationType
{
    public function __construct(
        private string $recommendationTypeId,
        private string $recommendationTypeTitle,
    ) {
    }

    public function getRecommendationTypeId(): string
    {
        return $this->recommendationTypeId;
    }

    public function setRecommendationTypeId(string $recommendationTypeId): self
    {
        $this->recommendationTypeId = $recommendationTypeId;

        return $this;
    }

    public function getRecommendationTypeTitle(): string
    {
        return $this->recommendationTypeTitle;
    }

    public function setRecommendationTypeTitle(string $recommendationTypeTitle): self
    {
        $this->recommendationTypeTitle = $recommendationTypeTitle;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            recommendationTypeId: $data['recommendationTypeId'],
            recommendationTypeTitle: $data['recommendationTypeTitle'],
        );
    }
}
