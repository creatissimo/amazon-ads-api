<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendationCreate
{
    public function __construct(
        private string $recommendationType,
        private ?SBCreateRecommendationTypeDetails $recommendationTypeDetails = null,
    ) {
    }

    public function getRecommendationType(): string
    {
        return $this->recommendationType;
    }

    public function setRecommendationType(string $recommendationType): self
    {
        $this->recommendationType = $recommendationType;

        return $this;
    }

    public function getRecommendationTypeDetails(): ?SBCreateRecommendationTypeDetails
    {
        return $this->recommendationTypeDetails;
    }

    public function setRecommendationTypeDetails(?SBCreateRecommendationTypeDetails $recommendationTypeDetails): self
    {
        $this->recommendationTypeDetails = $recommendationTypeDetails;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'recommendationType' => $this->recommendationType,
        ];

        if ($this->recommendationTypeDetails !== null) {
            $data['recommendationTypeDetails'] = $this->recommendationTypeDetails->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            recommendationType: $data['recommendationType'],
            recommendationTypeDetails: isset($data['recommendationTypeDetails']) ? SBCreateRecommendationTypeDetails::fromArray($data['recommendationTypeDetails']) : null,
        );
    }
}
