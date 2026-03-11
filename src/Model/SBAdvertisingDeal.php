<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDeal
{
    public function __construct(
        private string $advertisingDealId,
        private string $endDateTime,
        private string $name,
        private string $startDateTime,
        private SBAdvertisingDealStatus $status,
        private ?SBAdvertisingDealPrice $price = null,
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

    public function getStatus(): SBAdvertisingDealStatus
    {
        return $this->status;
    }

    public function setStatus(SBAdvertisingDealStatus $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPrice(): ?SBAdvertisingDealPrice
    {
        return $this->price;
    }

    public function setPrice(?SBAdvertisingDealPrice $price): self
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
            'advertisingDealId' => $this->advertisingDealId,
            'endDateTime' => $this->endDateTime,
            'name' => $this->name,
            'startDateTime' => $this->startDateTime,
            'status' => $this->status->toArray(),
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
            advertisingDealId: $data['advertisingDealId'],
            endDateTime: $data['endDateTime'],
            name: $data['name'],
            startDateTime: $data['startDateTime'],
            status: SBAdvertisingDealStatus::fromArray($data['status']),
            price: isset($data['price']) ? SBAdvertisingDealPrice::fromArray($data['price']) : null,
            state: isset($data['state']) ? SBAdvertisingDealState::from($data['state']) : null,
        );
    }
}
