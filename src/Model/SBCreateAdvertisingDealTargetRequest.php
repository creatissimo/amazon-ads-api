<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateAdvertisingDealTargetRequest
{
    public function __construct(
        private array $advertisingDealTargets = [],
    ) {
    }

    /** @return SBAdvertisingDealTargetCreate[] */
    public function getAdvertisingDealTargets(): array
    {
        return $this->advertisingDealTargets;
    }

    /** @param SBAdvertisingDealTargetCreate[] $advertisingDealTargets */
    public function setAdvertisingDealTargets(array $advertisingDealTargets): self
    {
        $this->advertisingDealTargets = $advertisingDealTargets;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->advertisingDealTargets !== []) {
            $data['advertisingDealTargets'] = array_map(
                static fn(SBAdvertisingDealTargetCreate $v) => $v->toArray(),
                $this->advertisingDealTargets,
            );
        }

        return $data;
    }
}
