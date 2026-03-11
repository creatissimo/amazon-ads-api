<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class PlacementTypeTarget
{
    public function __construct(
        private string $placementType,
    ) {
    }

    public function getPlacementType(): string
    {
        return $this->placementType;
    }

    public function toArray(): array
    {
        $data = [
            'placementType' => $this->placementType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            placementType: $data['placementType'],
        );
    }
}

