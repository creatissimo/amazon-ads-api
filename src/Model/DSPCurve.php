<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCurve
{
    public function __construct(
        private array $focusPoint = [],
        private ?DSPForecastPeriodicity $periodicity = null,
        private array $points = [],
    ) {
    }

    /** @return DSPPoint[] */
    public function getFocusPoint(): array
    {
        return $this->focusPoint;
    }

    /** @param DSPPoint[] $focusPoint */
    public function setFocusPoint(array $focusPoint): self
    {
        $this->focusPoint = $focusPoint;

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

    /** @return DSPPoint[] */
    public function getPoints(): array
    {
        return $this->points;
    }

    /** @param DSPPoint[] $points */
    public function setPoints(array $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->focusPoint !== []) {
            $data['focusPoint'] = array_map(
                static fn(DSPPoint $v) => $v->toArray(),
                $this->focusPoint,
            );
        }
        if ($this->periodicity !== null) {
            $data['periodicity'] = $this->periodicity->value;
        }
        if ($this->points !== []) {
            $data['points'] = array_map(
                static fn(DSPPoint $v) => $v->toArray(),
                $this->points,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            focusPoint: array_map(
                static fn(array $v) => DSPPoint::fromArray($v),
                $data['focusPoint'] ?? [],
            ),
            periodicity: isset($data['periodicity']) ? DSPForecastPeriodicity::from($data['periodicity']) : null,
            points: array_map(
                static fn(array $v) => DSPPoint::fromArray($v),
                $data['points'] ?? [],
            ),
        );
    }
}
