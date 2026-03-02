<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendationTypeSuccessResponse
{
    public function __construct(
        private ?string $nextToken = null,
        private array $recommendationTypes = [],
    ) {
    }

    public function getNextToken(): ?string
    {
        return $this->nextToken;
    }

    public function setNextToken(?string $nextToken): self
    {
        $this->nextToken = $nextToken;

        return $this;
    }

    /** @return SBRecommendationType[] */
    public function getRecommendationTypes(): array
    {
        return $this->recommendationTypes;
    }

    /** @param SBRecommendationType[] $recommendationTypes */
    public function setRecommendationTypes(array $recommendationTypes): self
    {
        $this->recommendationTypes = $recommendationTypes;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            nextToken: $data['nextToken'] ?? null,
            recommendationTypes: array_map(
                static fn(array $v) => SBRecommendationType::fromArray($v),
                $data['recommendationTypes'] ?? [],
            ),
        );
    }
}
