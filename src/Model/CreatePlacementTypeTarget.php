<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreatePlacementTypeTarget
{
    public function __construct(
        private string $placementType,
    ) {
    }

    public function getPlacementType(): string
    {
        return $this->placementType;
    }

    public function setPlacementType(string $placementType): self
    {
        $this->placementType = $placementType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'placementType' => $this->placementType,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            placementType: $data['placementType'],
        );
    }
}

