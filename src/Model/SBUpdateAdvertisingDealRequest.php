<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBUpdateAdvertisingDealRequest
{
    public function __construct(
        private array $advertisingDeals = [],
    ) {
    }

    /** @return SBAdvertisingDealUpdate[] */
    public function getAdvertisingDeals(): array
    {
        return $this->advertisingDeals;
    }

    /** @param SBAdvertisingDealUpdate[] $advertisingDeals */
    public function setAdvertisingDeals(array $advertisingDeals): self
    {
        $this->advertisingDeals = $advertisingDeals;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->advertisingDeals !== []) {
            $data['advertisingDeals'] = array_map(
                static fn(SBAdvertisingDealUpdate $v) => $v->toArray(),
                $this->advertisingDeals,
            );
        }

        return $data;
    }
}
