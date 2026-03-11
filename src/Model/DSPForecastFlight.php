<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPForecastFlight
{
    public function __construct(
        private DSPBudget $budget,
        private string $endDateTime,
        private string $startDateTime,
        private ?string $flightId = null,
    ) {
    }

    public function getBudget(): DSPBudget
    {
        return $this->budget;
    }

    public function setBudget(DSPBudget $budget): self
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

    public function toArray(): array
    {
        $data = [
            'budget' => $this->budget->toArray(),
            'endDateTime' => $this->endDateTime,
            'startDateTime' => $this->startDateTime,
        ];

        if ($this->flightId !== null) {
            $data['flightId'] = $this->flightId;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budget: DSPBudget::fromArray($data['budget']),
            endDateTime: $data['endDateTime'],
            startDateTime: $data['startDateTime'],
            flightId: $data['flightId'] ?? null,
        );
    }
}
