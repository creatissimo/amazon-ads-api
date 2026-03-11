<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCampaignForecast
{
    public function __construct(
        private string $campaignDisplayName,
        private DSPCampaignForecastDescription $campaignForecastDescription,
        private string $creationDateTime,
        private array $availableForecastFlights = [],
        private array $flightForecasts = [],
        private ?bool $hasExistingGuidance = null,
    ) {
    }

    public function getCampaignDisplayName(): string
    {
        return $this->campaignDisplayName;
    }

    public function setCampaignDisplayName(string $campaignDisplayName): self
    {
        $this->campaignDisplayName = $campaignDisplayName;

        return $this;
    }

    public function getCampaignForecastDescription(): DSPCampaignForecastDescription
    {
        return $this->campaignForecastDescription;
    }

    public function setCampaignForecastDescription(DSPCampaignForecastDescription $campaignForecastDescription): self
    {
        $this->campaignForecastDescription = $campaignForecastDescription;

        return $this;
    }

    public function getCreationDateTime(): string
    {
        return $this->creationDateTime;
    }

    public function setCreationDateTime(string $creationDateTime): self
    {
        $this->creationDateTime = $creationDateTime;

        return $this;
    }

    /** @return DSPForecastFlight[] */
    public function getAvailableForecastFlights(): array
    {
        return $this->availableForecastFlights;
    }

    /** @param DSPForecastFlight[] $availableForecastFlights */
    public function setAvailableForecastFlights(array $availableForecastFlights): self
    {
        $this->availableForecastFlights = $availableForecastFlights;

        return $this;
    }

    /** @return DSPFlightForecast[] */
    public function getFlightForecasts(): array
    {
        return $this->flightForecasts;
    }

    /** @param DSPFlightForecast[] $flightForecasts */
    public function setFlightForecasts(array $flightForecasts): self
    {
        $this->flightForecasts = $flightForecasts;

        return $this;
    }

    public function getHasExistingGuidance(): ?bool
    {
        return $this->hasExistingGuidance;
    }

    public function setHasExistingGuidance(?bool $hasExistingGuidance): self
    {
        $this->hasExistingGuidance = $hasExistingGuidance;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'campaignDisplayName' => $this->campaignDisplayName,
            'campaignForecastDescription' => $this->campaignForecastDescription->toArray(),
            'creationDateTime' => $this->creationDateTime,
        ];

        if ($this->availableForecastFlights !== []) {
            $data['availableForecastFlights'] = array_map(
                static fn(DSPForecastFlight $v) => $v->toArray(),
                $this->availableForecastFlights,
            );
        }
        if ($this->flightForecasts !== []) {
            $data['flightForecasts'] = array_map(
                static fn(DSPFlightForecast $v) => $v->toArray(),
                $this->flightForecasts,
            );
        }
        if ($this->hasExistingGuidance !== null) {
            $data['hasExistingGuidance'] = $this->hasExistingGuidance;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaignDisplayName: $data['campaignDisplayName'],
            campaignForecastDescription: DSPCampaignForecastDescription::fromArray($data['campaignForecastDescription']),
            creationDateTime: $data['creationDateTime'],
            availableForecastFlights: array_map(
                static fn(array $v) => DSPForecastFlight::fromArray($v),
                $data['availableForecastFlights'] ?? [],
            ),
            flightForecasts: array_map(
                static fn(array $v) => DSPFlightForecast::fromArray($v),
                $data['flightForecasts'] ?? [],
            ),
            hasExistingGuidance: isset($data['hasExistingGuidance']) ? (bool) $data['hasExistingGuidance'] : null,
        );
    }
}
