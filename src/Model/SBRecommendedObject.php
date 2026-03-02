<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendedObject
{
    public function __construct(
        private mixed $recommendedObjectSettings = null,
    ) {
    }

    public function getRecommendedObjectSettings(): mixed
    {
        return $this->recommendedObjectSettings;
    }

    public function setRecommendedObjectSettings(mixed $recommendedObjectSettings): self
    {
        $this->recommendedObjectSettings = $recommendedObjectSettings;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            recommendedObjectSettings: $data['recommendedObjectSettings'] ?? null,
        );
    }
}
