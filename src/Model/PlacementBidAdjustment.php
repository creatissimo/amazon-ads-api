<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class PlacementBidAdjustment
{
    public function __construct(
        private int $percentage,
        private Placement $placement,
    ) {
    }

    public function getPercentage(): int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getPlacement(): Placement
    {
        return $this->placement;
    }

    public function setPlacement(Placement $placement): self
    {
        $this->placement = $placement;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            percentage: (int) $data['percentage'],
            placement: Placement::from($data['placement']),
        );
    }
}
