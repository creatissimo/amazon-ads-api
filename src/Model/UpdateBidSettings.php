<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateBidSettings
{
    public function __construct(
        private ?UpdateBidAdjustments $bidAdjustments = null,
        private ?BidStrategy $bidStrategy = null,
    ) {
    }

    public function getBidAdjustments(): ?UpdateBidAdjustments
    {
        return $this->bidAdjustments;
    }

    public function setBidAdjustments(?UpdateBidAdjustments $bidAdjustments): self
    {
        $this->bidAdjustments = $bidAdjustments;

        return $this;
    }

    public function getBidStrategy(): ?BidStrategy
    {
        return $this->bidStrategy;
    }

    public function setBidStrategy(?BidStrategy $bidStrategy): self
    {
        $this->bidStrategy = $bidStrategy;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->bidAdjustments !== null) {
            $data['bidAdjustments'] = $this->bidAdjustments->toArray();
        }
        if ($this->bidStrategy !== null) {
            $data['bidStrategy'] = $this->bidStrategy->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            bidAdjustments: isset($data['bidAdjustments']) ? UpdateBidAdjustments::fromArray($data['bidAdjustments']) : null,
            bidStrategy: isset($data['bidStrategy']) ? BidStrategy::from($data['bidStrategy']) : null,
        );
    }
}
