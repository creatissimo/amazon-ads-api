<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateAmazonViewability
{
    public function __construct(
        private ?bool $includeUnmeasurableImpressions = null,
        private ?ViewabilityTier $viewabilityTier = null,
    ) {
    }

    public function getIncludeUnmeasurableImpressions(): ?bool
    {
        return $this->includeUnmeasurableImpressions;
    }

    public function setIncludeUnmeasurableImpressions(?bool $includeUnmeasurableImpressions): self
    {
        $this->includeUnmeasurableImpressions = $includeUnmeasurableImpressions;

        return $this;
    }

    public function getViewabilityTier(): ?ViewabilityTier
    {
        return $this->viewabilityTier;
    }

    public function setViewabilityTier(?ViewabilityTier $viewabilityTier): self
    {
        $this->viewabilityTier = $viewabilityTier;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->includeUnmeasurableImpressions !== null) {
            $data['includeUnmeasurableImpressions'] = $this->includeUnmeasurableImpressions;
        }
        if ($this->viewabilityTier !== null) {
            $data['viewabilityTier'] = $this->viewabilityTier->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            includeUnmeasurableImpressions: isset($data['includeUnmeasurableImpressions']) ? (bool) $data['includeUnmeasurableImpressions'] : null,
            viewabilityTier: isset($data['viewabilityTier']) ? ViewabilityTier::from($data['viewabilityTier']) : null,
        );
    }
}
