<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class LocationTarget
{
    public function __construct(
        private string $locationId,
        private ?string $locationIdResolved = null,
    ) {
    }

    public function getLocationId(): string
    {
        return $this->locationId;
    }

    public function setLocationId(string $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function getLocationIdResolved(): ?string
    {
        return $this->locationIdResolved;
    }

    public function setLocationIdResolved(?string $locationIdResolved): self
    {
        $this->locationIdResolved = $locationIdResolved;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            locationId: $data['locationId'],
            locationIdResolved: $data['locationIdResolved'] ?? null,
        );
    }
}

