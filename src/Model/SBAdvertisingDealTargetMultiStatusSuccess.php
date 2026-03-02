<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealTargetMultiStatusSuccess
{
    public function __construct(
        private SBAdvertisingDealTarget $advertisingDealTarget,
        private int $index,
    ) {
    }

    public function getAdvertisingDealTarget(): SBAdvertisingDealTarget
    {
        return $this->advertisingDealTarget;
    }

    public function setAdvertisingDealTarget(SBAdvertisingDealTarget $advertisingDealTarget): self
    {
        $this->advertisingDealTarget = $advertisingDealTarget;

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
            advertisingDealTarget: SBAdvertisingDealTarget::fromArray($data['advertisingDealTarget']),
            index: (int) $data['index'],
        );
    }
}
