<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealUpdate
{
    public function __construct(
        private string $advertisingDealId,
        private ?string $endDateTime = null,
        private ?string $name = null,
        private ?SBUpdateAdvertisingDealPrice $price = null,
        private ?string $startDateTime = null,
        private ?SBAdvertisingDealState $state = null,
    ) {
    }

    public function getAdvertisingDealId(): string
    {
        return $this->advertisingDealId;
    }

    public function setAdvertisingDealId(string $advertisingDealId): self
    {
        $this->advertisingDealId = $advertisingDealId;

        return $this;
    }

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

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

    public function getPrice(): ?SBUpdateAdvertisingDealPrice
    {
        return $this->price;
    }

    public function setPrice(?SBUpdateAdvertisingDealPrice $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

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
            'advertisingDealId' => $this->advertisingDealId,
        ];

        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->price !== null) {
            $data['price'] = $this->price->toArray();
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDealId: $data['advertisingDealId'],
            endDateTime: $data['endDateTime'] ?? null,
            name: $data['name'] ?? null,
            price: isset($data['price']) ? SBUpdateAdvertisingDealPrice::fromArray($data['price']) : null,
            startDateTime: $data['startDateTime'] ?? null,
            state: isset($data['state']) ? SBAdvertisingDealState::from($data['state']) : null,
        );
    }
}
