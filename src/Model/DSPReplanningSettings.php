<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPReplanningSettings
{
    public function __construct(
        private array $flights = [],
    ) {
    }

    /** @return DSPForecastFlight[] */
    public function getFlights(): array
    {
        return $this->flights;
    }

    /** @param DSPForecastFlight[] $flights */
    public function setFlights(array $flights): self
    {
        $this->flights = $flights;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            flights: array_map(
                static fn(array $v) => DSPForecastFlight::fromArray($v),
                $data['flights'] ?? [],
            ),
        );
    }
}
