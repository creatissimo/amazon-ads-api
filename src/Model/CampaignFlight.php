<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignFlight
{
    public function __construct(
        private FlightBudget $budget,
        private string $endDateTime,
        private string $startDateTime,
        private ?string $flightId = null,
        private ?string $name = null,
    ) {
    }

    public function getBudget(): FlightBudget
    {
        return $this->budget;
    }

    public function setBudget(FlightBudget $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getEndDateTime(): string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getStartDateTime(): string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getFlightId(): ?string
    {
        return $this->flightId;
    }

    public function setFlightId(?string $flightId): self
    {
        $this->flightId = $flightId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budget: FlightBudget::fromArray($data['budget']),
            endDateTime: $data['endDateTime'],
            startDateTime: $data['startDateTime'],
            flightId: $data['flightId'] ?? null,
            name: $data['name'] ?? null,
        );
    }
}
