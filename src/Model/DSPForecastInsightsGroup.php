<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPForecastInsightsGroup
{
    public function __construct(
        private string $displayName,
        private DSPRecommendedObjectType $groupType,
        private array $insightsFeatures,
        private string $tag,
        private array $coldStartDealNames = [],
        private array $coldStartSegmentNames = [],
    ) {
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getGroupType(): DSPRecommendedObjectType
    {
        return $this->groupType;
    }

    public function setGroupType(DSPRecommendedObjectType $groupType): self
    {
        $this->groupType = $groupType;

        return $this;
    }

    /** @return DSPInsightFeature[] */
    public function getInsightsFeatures(): array
    {
        return $this->insightsFeatures;
    }

    /** @param DSPInsightFeature[] $insightsFeatures */
    public function setInsightsFeatures(array $insightsFeatures): self
    {
        $this->insightsFeatures = $insightsFeatures;

        return $this;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getColdStartDealNames(): array
    {
        return $this->coldStartDealNames;
    }

    public function setColdStartDealNames(array $coldStartDealNames): self
    {
        $this->coldStartDealNames = $coldStartDealNames;

        return $this;
    }

    public function getColdStartSegmentNames(): array
    {
        return $this->coldStartSegmentNames;
    }

    public function setColdStartSegmentNames(array $coldStartSegmentNames): self
    {
        $this->coldStartSegmentNames = $coldStartSegmentNames;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'displayName' => $this->displayName,
            'groupType' => $this->groupType->value,
            'insightsFeatures' => array_map(
                static fn(DSPInsightFeature $v) => $v->value,
                $this->insightsFeatures,
            ),
            'tag' => $this->tag,
        ];

        if ($this->coldStartDealNames !== []) {
            $data['coldStartDealNames'] = $this->coldStartDealNames;
        }
        if ($this->coldStartSegmentNames !== []) {
            $data['coldStartSegmentNames'] = $this->coldStartSegmentNames;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            displayName: $data['displayName'],
            groupType: DSPRecommendedObjectType::from($data['groupType']),
            insightsFeatures: array_map(
                static fn(string $v) => DSPInsightFeature::from($v),
                $data['insightsFeatures'] ?? [],
            ),
            tag: $data['tag'],
            coldStartDealNames: $data['coldStartDealNames'] ?? [],
            coldStartSegmentNames: $data['coldStartSegmentNames'] ?? [],
        );
    }
}
