<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateBidAdjustments
{
    public function __construct(
        private array $audienceBidAdjustments = [],
        private array $creativeBidAdjustments = [],
        private array $placementBidAdjustments = [],
        private array $shopperSegmentBidAdjustments = [],
    ) {
    }

    /** @return CreateAudienceBidAdjustment[] */
    public function getAudienceBidAdjustments(): array
    {
        return $this->audienceBidAdjustments;
    }

    /** @param CreateAudienceBidAdjustment[] $audienceBidAdjustments */
    public function setAudienceBidAdjustments(array $audienceBidAdjustments): self
    {
        $this->audienceBidAdjustments = $audienceBidAdjustments;

        return $this;
    }

    /** @return CreateCreativeBidAdjustment[] */
    public function getCreativeBidAdjustments(): array
    {
        return $this->creativeBidAdjustments;
    }

    /** @param CreateCreativeBidAdjustment[] $creativeBidAdjustments */
    public function setCreativeBidAdjustments(array $creativeBidAdjustments): self
    {
        $this->creativeBidAdjustments = $creativeBidAdjustments;

        return $this;
    }

    /** @return CreatePlacementBidAdjustment[] */
    public function getPlacementBidAdjustments(): array
    {
        return $this->placementBidAdjustments;
    }

    /** @param CreatePlacementBidAdjustment[] $placementBidAdjustments */
    public function setPlacementBidAdjustments(array $placementBidAdjustments): self
    {
        $this->placementBidAdjustments = $placementBidAdjustments;

        return $this;
    }

    public function getShopperSegmentBidAdjustments(): array
    {
        return $this->shopperSegmentBidAdjustments;
    }

    public function setShopperSegmentBidAdjustments(array $shopperSegmentBidAdjustments): self
    {
        $this->shopperSegmentBidAdjustments = $shopperSegmentBidAdjustments;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->audienceBidAdjustments !== []) {
            $data['audienceBidAdjustments'] = array_map(
                static fn(CreateAudienceBidAdjustment $v) => $v->toArray(),
                $this->audienceBidAdjustments,
            );
        }
        if ($this->creativeBidAdjustments !== []) {
            $data['creativeBidAdjustments'] = array_map(
                static fn(CreateCreativeBidAdjustment $v) => $v->toArray(),
                $this->creativeBidAdjustments,
            );
        }
        if ($this->placementBidAdjustments !== []) {
            $data['placementBidAdjustments'] = array_map(
                static fn(CreatePlacementBidAdjustment $v) => $v->toArray(),
                $this->placementBidAdjustments,
            );
        }
        if ($this->shopperSegmentBidAdjustments !== []) {
            $data['shopperSegmentBidAdjustments'] = $this->shopperSegmentBidAdjustments;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            audienceBidAdjustments: array_map(
                static fn(array $v) => CreateAudienceBidAdjustment::fromArray($v),
                $data['audienceBidAdjustments'] ?? [],
            ),
            creativeBidAdjustments: array_map(
                static fn(array $v) => CreateCreativeBidAdjustment::fromArray($v),
                $data['creativeBidAdjustments'] ?? [],
            ),
            placementBidAdjustments: array_map(
                static fn(array $v) => CreatePlacementBidAdjustment::fromArray($v),
                $data['placementBidAdjustments'] ?? [],
            ),
            shopperSegmentBidAdjustments: $data['shopperSegmentBidAdjustments'] ?? [],
        );
    }
}
