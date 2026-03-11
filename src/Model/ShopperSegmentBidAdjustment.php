<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ShopperSegmentBidAdjustment
{
    public function __construct(
        private int $percentage,
        private ShopperSegment $shopperSegment,
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

    public function getShopperSegment(): ShopperSegment
    {
        return $this->shopperSegment;
    }

    public function setShopperSegment(ShopperSegment $shopperSegment): self
    {
        $this->shopperSegment = $shopperSegment;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'percentage' => $this->percentage,
            'shopperSegment' => $this->shopperSegment->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            percentage: (int) $data['percentage'],
            shopperSegment: ShopperSegment::from($data['shopperSegment']),
        );
    }
}
