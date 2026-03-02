<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealMultiStatusSuccess
{
    public function __construct(
        private SBAdvertisingDeal $advertisingDeal,
        private int $index,
    ) {
    }

    public function getAdvertisingDeal(): SBAdvertisingDeal
    {
        return $this->advertisingDeal;
    }

    public function setAdvertisingDeal(SBAdvertisingDeal $advertisingDeal): self
    {
        $this->advertisingDeal = $advertisingDeal;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDeal: SBAdvertisingDeal::fromArray($data['advertisingDeal']),
            index: (int) $data['index'],
        );
    }
}
