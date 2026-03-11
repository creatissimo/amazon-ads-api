<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPReplanning
{
    public function __construct(
        private string $content,
        private string $title,
        private array $curves = [],
        private ?DSPDeliverInFullConfidence $deliverInFullConfidence = null,
        private array $metrics = [],
        private ?DSPForecastFlight $scenarioFlight = null,
        private ?string $scenarioType = null,
        private array $selectedMetrics = [],
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getScenarioFlight(): ?DSPForecastFlight
    {
        return $this->scenarioFlight;
    }

    public function setScenarioFlight(?DSPForecastFlight $scenarioFlight): self
    {
        $this->scenarioFlight = $scenarioFlight;

        return $this;
    }

    public function getScenarioType(): ?string
    {
        return $this->scenarioType;
    }

    public function setScenarioType(?string $scenarioType): self
    {
        $this->scenarioType = $scenarioType;

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

    public function toArray(): array
    {
        $data = [
            'content' => $this->content,
            'title' => $this->title,
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
        if ($this->metrics !== []) {
            $data['metrics'] = array_map(
                static fn(DSPForecastMetric $v) => $v->toArray(),
                $this->metrics,
            );
        }
        if ($this->scenarioFlight !== null) {
            $data['scenarioFlight'] = $this->scenarioFlight->toArray();
        }
        if ($this->scenarioType !== null) {
            $data['scenarioType'] = $this->scenarioType;
        }
        if ($this->selectedMetrics !== []) {
            $data['selectedMetrics'] = array_map(
                static fn(DSPSelectedForecastMetric $v) => $v->value,
                $this->selectedMetrics,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            content: $data['content'],
            title: $data['title'],
            curves: array_map(
                static fn(array $v) => DSPCurve::fromArray($v),
                $data['curves'] ?? [],
            ),
            deliverInFullConfidence: isset($data['deliverInFullConfidence']) ? DSPDeliverInFullConfidence::fromArray($data['deliverInFullConfidence']) : null,
            metrics: array_map(
                static fn(array $v) => DSPForecastMetric::fromArray($v),
                $data['metrics'] ?? [],
            ),
            scenarioFlight: isset($data['scenarioFlight']) ? DSPForecastFlight::fromArray($data['scenarioFlight']) : null,
            scenarioType: $data['scenarioType'] ?? null,
            selectedMetrics: array_map(
                static fn(string $v) => DSPSelectedForecastMetric::from($v),
                $data['selectedMetrics'] ?? [],
            ),
        );
    }
}
