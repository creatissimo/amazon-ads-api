<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPForecastMetricsDescription
{
    public function __construct(
        private bool $allMetrics,
        private array $selectedMetrics = [],
    ) {
    }

    public function getAllMetrics(): bool
    {
        return $this->allMetrics;
    }

    public function setAllMetrics(bool $allMetrics): self
    {
        $this->allMetrics = $allMetrics;

        return $this;
    }

    /** @return DSPSelectedForecastMetric[] */
    public function getSelectedMetrics(): array
    {
        return $this->selectedMetrics;
    }

    /** @param DSPSelectedForecastMetric[] $selectedMetrics */
    public function setSelectedMetrics(array $selectedMetrics): self
    {
        $this->selectedMetrics = $selectedMetrics;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            allMetrics: (bool) $data['allMetrics'],
            selectedMetrics: array_map(
                static fn(string $v) => DSPSelectedForecastMetric::from($v),
                $data['selectedMetrics'] ?? [],
            ),
        );
    }
}
