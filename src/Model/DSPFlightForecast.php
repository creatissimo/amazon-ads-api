<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPFlightForecast
{
    public function __construct(
        private string $flightId,
        private string $forecastEndDateTime,
        private string $forecastStartDateTime,
        private array $curves = [],
        private ?DSPDeliverInFullConfidence $deliverInFullConfidence = null,
        private ?DSPFlightForecastInsights $insights = null,
        private array $metrics = [],
        private array $replanning = [],
        private ?float $spend = null,
        private ?DSPMonetaryBudget $totalBudget = null,
        private array $warnings = [],
    ) {
    }

    public function getFlightId(): string
    {
        return $this->flightId;
    }

    public function setFlightId(string $flightId): self
    {
        $this->flightId = $flightId;

        return $this;
    }

    public function getForecastEndDateTime(): string
    {
        return $this->forecastEndDateTime;
    }

    public function setForecastEndDateTime(string $forecastEndDateTime): self
    {
        $this->forecastEndDateTime = $forecastEndDateTime;

        return $this;
    }

    public function getForecastStartDateTime(): string
    {
        return $this->forecastStartDateTime;
    }

    public function setForecastStartDateTime(string $forecastStartDateTime): self
    {
        $this->forecastStartDateTime = $forecastStartDateTime;

        return $this;
    }

    /** @return DSPCurve[] */
    public function getCurves(): array
    {
        return $this->curves;
    }

    /** @param DSPCurve[] $curves */
    public function setCurves(array $curves): self
    {
        $this->curves = $curves;

        return $this;
    }

    public function getDeliverInFullConfidence(): ?DSPDeliverInFullConfidence
    {
        return $this->deliverInFullConfidence;
    }

    public function setDeliverInFullConfidence(?DSPDeliverInFullConfidence $deliverInFullConfidence): self
    {
        $this->deliverInFullConfidence = $deliverInFullConfidence;

        return $this;
    }

    public function getInsights(): ?DSPFlightForecastInsights
    {
        return $this->insights;
    }

    public function setInsights(?DSPFlightForecastInsights $insights): self
    {
        $this->insights = $insights;

        return $this;
    }

    /** @return DSPForecastMetric[] */
    public function getMetrics(): array
    {
        return $this->metrics;
    }

    /** @param DSPForecastMetric[] $metrics */
    public function setMetrics(array $metrics): self
    {
        $this->metrics = $metrics;

        return $this;
    }

    /** @return DSPReplanning[] */
    public function getReplanning(): array
    {
        return $this->replanning;
    }

    /** @param DSPReplanning[] $replanning */
    public function setReplanning(array $replanning): self
    {
        $this->replanning = $replanning;

        return $this;
    }

    public function getSpend(): ?float
    {
        return $this->spend;
    }

    public function setSpend(?float $spend): self
    {
        $this->spend = $spend;

        return $this;
    }

    public function getTotalBudget(): ?DSPMonetaryBudget
    {
        return $this->totalBudget;
    }

    public function setTotalBudget(?DSPMonetaryBudget $totalBudget): self
    {
        $this->totalBudget = $totalBudget;

        return $this;
    }

    /** @return DSPWarning[] */
    public function getWarnings(): array
    {
        return $this->warnings;
    }

    /** @param DSPWarning[] $warnings */
    public function setWarnings(array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'flightId' => $this->flightId,
            'forecastEndDateTime' => $this->forecastEndDateTime,
            'forecastStartDateTime' => $this->forecastStartDateTime,
        ];

        if ($this->curves !== []) {
            $data['curves'] = array_map(
                static fn(DSPCurve $v) => $v->toArray(),
                $this->curves,
            );
        }
        if ($this->deliverInFullConfidence !== null) {
            $data['deliverInFullConfidence'] = $this->deliverInFullConfidence->toArray();
        }
        if ($this->insights !== null) {
            $data['insights'] = $this->insights->toArray();
        }
        if ($this->metrics !== []) {
            $data['metrics'] = array_map(
                static fn(DSPForecastMetric $v) => $v->toArray(),
                $this->metrics,
            );
        }
        if ($this->replanning !== []) {
            $data['replanning'] = array_map(
                static fn(DSPReplanning $v) => $v->toArray(),
                $this->replanning,
            );
        }
        if ($this->spend !== null) {
            $data['spend'] = $this->spend;
        }
        if ($this->totalBudget !== null) {
            $data['totalBudget'] = $this->totalBudget->toArray();
        }
        if ($this->warnings !== []) {
            $data['warnings'] = array_map(
                static fn(DSPWarning $v) => $v->toArray(),
                $this->warnings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            flightId: $data['flightId'],
            forecastEndDateTime: $data['forecastEndDateTime'],
            forecastStartDateTime: $data['forecastStartDateTime'],
            curves: array_map(
                static fn(array $v) => DSPCurve::fromArray($v),
                $data['curves'] ?? [],
            ),
            deliverInFullConfidence: isset($data['deliverInFullConfidence']) ? DSPDeliverInFullConfidence::fromArray($data['deliverInFullConfidence']) : null,
            insights: isset($data['insights']) ? DSPFlightForecastInsights::fromArray($data['insights']) : null,
            metrics: array_map(
                static fn(array $v) => DSPForecastMetric::fromArray($v),
                $data['metrics'] ?? [],
            ),
            replanning: array_map(
                static fn(array $v) => DSPReplanning::fromArray($v),
                $data['replanning'] ?? [],
            ),
            spend: isset($data['spend']) ? (float) $data['spend'] : null,
            totalBudget: isset($data['totalBudget']) ? DSPMonetaryBudget::fromArray($data['totalBudget']) : null,
            warnings: array_map(
                static fn(array $v) => DSPWarning::fromArray($v),
                $data['warnings'] ?? [],
            ),
        );
    }
}
