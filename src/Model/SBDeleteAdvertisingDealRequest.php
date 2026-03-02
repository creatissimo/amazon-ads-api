<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBDeleteAdvertisingDealRequest
{
    public function __construct(
        private array $advertisingDealIds = [],
    ) {
    }

    public function getAdvertisingDealIds(): array
    {
        return $this->advertisingDealIds;
    }

    public function setAdvertisingDealIds(array $advertisingDealIds): self
    {
        $this->advertisingDealIds = $advertisingDealIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->advertisingDealIds !== []) {
            $data['advertisingDealIds'] = $this->advertisingDealIds;
        }

        return $data;
    }
}
