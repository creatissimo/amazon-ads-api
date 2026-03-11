<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRecommendedObject
{
    public function __construct(
        private ?SBObjectSettings $recommendedObjectSettings = null,
    ) {
    }

    public function getRecommendedObjectSettings(): ?SBObjectSettings
    {
        return $this->recommendedObjectSettings;
    }

    public function setRecommendedObjectSettings(?SBObjectSettings $recommendedObjectSettings): self
    {
        $this->recommendedObjectSettings = $recommendedObjectSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->recommendedObjectSettings !== null) {
            $data['recommendedObjectSettings'] = $this->recommendedObjectSettings->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            recommendedObjectSettings: isset($data['recommendedObjectSettings']) ? SBObjectSettings::fromArray($data['recommendedObjectSettings']) : null,
        );
    }
}
