<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPFlightForecastInsights
{
    public function __construct(
        private array $forecastExplainabilityInsights = [],
        private array $topExplainabilityFactors = [],
    ) {
    }

    /** @return DSPForecastInsightsGroup[] */
    public function getForecastExplainabilityInsights(): array
    {
        return $this->forecastExplainabilityInsights;
    }

    /** @param DSPForecastInsightsGroup[] $forecastExplainabilityInsights */
    public function setForecastExplainabilityInsights(array $forecastExplainabilityInsights): self
    {
        $this->forecastExplainabilityInsights = $forecastExplainabilityInsights;

        return $this;
    }

    /** @return DSPInsightFeature[] */
    public function getTopExplainabilityFactors(): array
    {
        return $this->topExplainabilityFactors;
    }

    /** @param DSPInsightFeature[] $topExplainabilityFactors */
    public function setTopExplainabilityFactors(array $topExplainabilityFactors): self
    {
        $this->topExplainabilityFactors = $topExplainabilityFactors;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            forecastExplainabilityInsights: array_map(
                static fn(array $v) => DSPForecastInsightsGroup::fromArray($v),
                $data['forecastExplainabilityInsights'] ?? [],
            ),
            topExplainabilityFactors: array_map(
                static fn(string $v) => DSPInsightFeature::from($v),
                $data['topExplainabilityFactors'] ?? [],
            ),
        );
    }
}
