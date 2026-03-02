<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdAssociationCreate
{
    public function __construct(
        private string $adGroupId,
        private string $adId,
        private CreateState $state,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?int $weight = null,
    ) {
    }

    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    public function setAdGroupId(string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;

        return $this;
    }

    public function getAdId(): string
    {
        return $this->adId;
    }

    public function setAdId(string $adId): self
    {
        $this->adId = $adId;

        return $this;
    }

    public function getState(): CreateState
    {
        return $this->state;
    }

    public function setState(CreateState $state): self
    {
        $this->state = $state;

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

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adGroupId' => $this->adGroupId,
            'adId' => $this->adId,
            'state' => $this->state->value,
        ];

        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->weight !== null) {
            $data['weight'] = $this->weight;
        }

        return $data;
    }
}

