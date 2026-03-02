<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendationTypeDetails
{
    public function __construct(
        private SBBrandedKeywordRecommendationTypeDetails $brandedKeywordRecommendationTypeDetails,
    ) {
    }

    public function getBrandedKeywordRecommendationTypeDetails(): SBBrandedKeywordRecommendationTypeDetails
    {
        return $this->brandedKeywordRecommendationTypeDetails;
    }

    public function setBrandedKeywordRecommendationTypeDetails(SBBrandedKeywordRecommendationTypeDetails $brandedKeywordRecommendationTypeDetails): self
    {
        $this->brandedKeywordRecommendationTypeDetails = $brandedKeywordRecommendationTypeDetails;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandedKeywordRecommendationTypeDetails' => $this->brandedKeywordRecommendationTypeDetails->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandedKeywordRecommendationTypeDetails: SBBrandedKeywordRecommendationTypeDetails::fromArray($data['brandedKeywordRecommendationTypeDetails']),
        );
    }
}

