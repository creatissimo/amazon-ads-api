<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdAssociationUpdate
{
    public function __construct(
        private string $adAssociationId,
        private ?UpdateState $state = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?int $weight = null,
    ) {
    }

    public function getAdAssociationId(): string
    {
        return $this->adAssociationId;
    }

    public function setAdAssociationId(string $adAssociationId): self
    {
        $this->adAssociationId = $adAssociationId;

        return $this;
    }

    public function getState(): ?UpdateState
    {
        return $this->state;
    }

    public function setState(?UpdateState $state): self
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
            'adAssociationId' => $this->adAssociationId,
        ];

        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
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

