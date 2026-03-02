<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPForecastMetric
{
    public function __construct(
        private DSPSelectedForecastMetric $metric,
        private DSPForecastValue $value,
        private ?DSPForecastPeriodicity $periodicity = null,
    ) {
    }

    public function getMetric(): DSPSelectedForecastMetric
    {
        return $this->metric;
    }

    public function setMetric(DSPSelectedForecastMetric $metric): self
    {
        $this->metric = $metric;

        return $this;
    }

    public function getValue(): DSPForecastValue
    {
        return $this->value;
    }

    public function setValue(DSPForecastValue $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getPeriodicity(): ?DSPForecastPeriodicity
    {
        return $this->periodicity;
    }

    public function setPeriodicity(?DSPForecastPeriodicity $periodicity): self
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            metric: DSPSelectedForecastMetric::from($data['metric']),
            value: DSPForecastValue::fromArray($data['value']),
            periodicity: isset($data['periodicity']) ? DSPForecastPeriodicity::from($data['periodicity']) : null,
        );
    }
}
