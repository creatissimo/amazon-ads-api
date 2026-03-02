<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateAdvertisingDealRequest
{
    public function __construct(
        private array $advertisingDeals = [],
    ) {
    }

    /** @return SBAdvertisingDealCreate[] */
    public function getAdvertisingDeals(): array
    {
        return $this->advertisingDeals;
    }

    /** @param SBAdvertisingDealCreate[] $advertisingDeals */
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
                static fn(SBAdvertisingDealCreate $v) => $v->toArray(),
                $this->advertisingDeals,
            );
        }

        return $data;
    }
}
