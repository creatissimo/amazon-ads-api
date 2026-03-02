<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BidSettings
{
    public function __construct(
        private ?BidAdjustments $bidAdjustments = null,
        private ?BidStrategy $bidStrategy = null,
    ) {
    }

    public function getBidAdjustments(): ?BidAdjustments
    {
        return $this->bidAdjustments;
    }

    public function setBidAdjustments(?BidAdjustments $bidAdjustments): self
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

    public static function fromArray(array $data): self
    {
        return new self(
            bidAdjustments: isset($data['bidAdjustments']) ? BidAdjustments::fromArray($data['bidAdjustments']) : null,
            bidStrategy: isset($data['bidStrategy']) ? BidStrategy::from($data['bidStrategy']) : null,
        );
    }
}
