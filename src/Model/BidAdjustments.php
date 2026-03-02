<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BidAdjustments
{
    public function __construct(
        private array $audienceBidAdjustments = [],
        private array $creativeBidAdjustments = [],
        private array $placementBidAdjustments = [],
        private array $shopperSegmentBidAdjustments = [],
    ) {
    }

    /** @return AudienceBidAdjustment[] */
    public function getAudienceBidAdjustments(): array
    {
        return $this->audienceBidAdjustments;
    }

    /** @param AudienceBidAdjustment[] $audienceBidAdjustments */
    public function setAudienceBidAdjustments(array $audienceBidAdjustments): self
    {
        $this->audienceBidAdjustments = $audienceBidAdjustments;

        return $this;
    }

    /** @return CreativeBidAdjustment[] */
    public function getCreativeBidAdjustments(): array
    {
        return $this->creativeBidAdjustments;
    }

    /** @param CreativeBidAdjustment[] $creativeBidAdjustments */
    public function setCreativeBidAdjustments(array $creativeBidAdjustments): self
    {
        $this->creativeBidAdjustments = $creativeBidAdjustments;

        return $this;
    }

    /** @return PlacementBidAdjustment[] */
    public function getPlacementBidAdjustments(): array
    {
        return $this->placementBidAdjustments;
    }

    /** @param PlacementBidAdjustment[] $placementBidAdjustments */
    public function setPlacementBidAdjustments(array $placementBidAdjustments): self
    {
        $this->placementBidAdjustments = $placementBidAdjustments;

        return $this;
    }

    /** @return ShopperSegmentBidAdjustment[] */
    public function getShopperSegmentBidAdjustments(): array
    {
        return $this->shopperSegmentBidAdjustments;
    }

    /** @param ShopperSegmentBidAdjustment[] $shopperSegmentBidAdjustments */
    public function setShopperSegmentBidAdjustments(array $shopperSegmentBidAdjustments): self
    {
        $this->shopperSegmentBidAdjustments = $shopperSegmentBidAdjustments;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            audienceBidAdjustments: array_map(
                static fn(array $v) => AudienceBidAdjustment::fromArray($v),
                $data['audienceBidAdjustments'] ?? [],
            ),
            creativeBidAdjustments: array_map(
                static fn(array $v) => CreativeBidAdjustment::fromArray($v),
                $data['creativeBidAdjustments'] ?? [],
            ),
            placementBidAdjustments: array_map(
                static fn(array $v) => PlacementBidAdjustment::fromArray($v),
                $data['placementBidAdjustments'] ?? [],
            ),
            shopperSegmentBidAdjustments: array_map(
                static fn(array $v) => ShopperSegmentBidAdjustment::fromArray($v),
                $data['shopperSegmentBidAdjustments'] ?? [],
            ),
        );
    }
}
