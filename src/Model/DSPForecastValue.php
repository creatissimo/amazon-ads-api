<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPForecastValue
{
    public function __construct(
        private float $high,
        private float $low,
        private float $mean,
    ) {
    }

    public function getHigh(): float
    {
        return $this->high;
    }

    public function setHigh(float $high): self
    {
        $this->high = $high;

        return $this;
    }

    public function getLow(): float
    {
        return $this->low;
    }

    public function setLow(float $low): self
    {
        $this->low = $low;

        return $this;
    }

    public function getMean(): float
    {
        return $this->mean;
    }

    public function setMean(float $mean): self
    {
        $this->mean = $mean;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'high' => $this->high,
            'low' => $this->low,
            'mean' => $this->mean,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            high: (float) $data['high'],
            low: (float) $data['low'],
            mean: (float) $data['mean'],
        );
    }
}
