<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBDeleteAdvertisingDealTargetRequest
{
    public function __construct(
        private array $advertisingDealTargetIds = [],
    ) {
    }

    public function getAdvertisingDealTargetIds(): array
    {
        return $this->advertisingDealTargetIds;
    }

    public function setAdvertisingDealTargetIds(array $advertisingDealTargetIds): self
    {
        $this->advertisingDealTargetIds = $advertisingDealTargetIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->advertisingDealTargetIds !== []) {
            $data['advertisingDealTargetIds'] = $this->advertisingDealTargetIds;
        }

        return $data;
    }
}
