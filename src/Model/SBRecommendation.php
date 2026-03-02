<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendation
{
    public function __construct(
        private string $recommendationId,
        private string $recommendationType,
        private array $recommendedObjects,
        private mixed $recommendationTypeDetails = null,
    ) {
    }

    public function getRecommendationId(): string
    {
        return $this->recommendationId;
    }

    public function setRecommendationId(string $recommendationId): self
    {
        $this->recommendationId = $recommendationId;

        return $this;
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

    /** @return SBRecommendedObject[] */
    public function getRecommendedObjects(): array
    {
        return $this->recommendedObjects;
    }

    /** @param SBRecommendedObject[] $recommendedObjects */
    public function setRecommendedObjects(array $recommendedObjects): self
    {
        $this->recommendedObjects = $recommendedObjects;

        return $this;
    }

    public function getRecommendationTypeDetails(): mixed
    {
        return $this->recommendationTypeDetails;
    }

    public function setRecommendationTypeDetails(mixed $recommendationTypeDetails): self
    {
        $this->recommendationTypeDetails = $recommendationTypeDetails;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            recommendationId: $data['recommendationId'],
            recommendationType: $data['recommendationType'],
            recommendedObjects: array_map(
                static fn(array $v) => SBRecommendedObject::fromArray($v),
                $data['recommendedObjects'] ?? [],
            ),
            recommendationTypeDetails: $data['recommendationTypeDetails'] ?? null,
        );
    }
}
