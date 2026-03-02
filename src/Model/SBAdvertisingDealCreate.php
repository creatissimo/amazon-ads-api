<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealCreate
{
    public function __construct(
        private string $endDateTime,
        private string $name,
        private string $startDateTime,
        private ?SBCreateAdvertisingDealPrice $price = null,
        private ?SBAdvertisingDealState $state = null,
    ) {
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getPrice(): ?SBCreateAdvertisingDealPrice
    {
        return $this->price;
    }

    public function setPrice(?SBCreateAdvertisingDealPrice $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getState(): ?SBAdvertisingDealState
    {
        return $this->state;
    }

    public function setState(?SBAdvertisingDealState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'endDateTime' => $this->endDateTime,
            'name' => $this->name,
            'startDateTime' => $this->startDateTime,
        ];

        if ($this->price !== null) {
            $data['price'] = $this->price->toArray();
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            endDateTime: $data['endDateTime'],
            name: $data['name'],
            startDateTime: $data['startDateTime'],
            price: isset($data['price']) ? SBCreateAdvertisingDealPrice::fromArray($data['price']) : null,
            state: isset($data['state']) ? SBAdvertisingDealState::from($data['state']) : null,
        );
    }
}
