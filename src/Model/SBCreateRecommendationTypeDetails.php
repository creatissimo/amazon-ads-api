<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateRecommendationTypeDetails
{
    public function __construct(
        private SBCreateBrandedKeywordRecommendationTypeDetails $brandedKeywordRecommendationTypeDetails,
    ) {
    }

    public function getBrandedKeywordRecommendationTypeDetails(): SBCreateBrandedKeywordRecommendationTypeDetails
    {
        return $this->brandedKeywordRecommendationTypeDetails;
    }

    public function setBrandedKeywordRecommendationTypeDetails(SBCreateBrandedKeywordRecommendationTypeDetails $brandedKeywordRecommendationTypeDetails): self
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
            brandedKeywordRecommendationTypeDetails: SBCreateBrandedKeywordRecommendationTypeDetails::fromArray($data['brandedKeywordRecommendationTypeDetails']),
        );
    }
}

