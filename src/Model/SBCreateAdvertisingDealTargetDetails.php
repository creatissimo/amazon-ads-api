<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateAdvertisingDealTargetDetails
{
    public function __construct(
        private SBCreateAdvertisingDealBrandedKeywordTargetDetails $advertisingDealBrandedKeywordTargetDetails,
    ) {
    }

    public function getAdvertisingDealBrandedKeywordTargetDetails(): SBCreateAdvertisingDealBrandedKeywordTargetDetails
    {
        return $this->advertisingDealBrandedKeywordTargetDetails;
    }

    public function setAdvertisingDealBrandedKeywordTargetDetails(SBCreateAdvertisingDealBrandedKeywordTargetDetails $advertisingDealBrandedKeywordTargetDetails): self
    {
        $this->advertisingDealBrandedKeywordTargetDetails = $advertisingDealBrandedKeywordTargetDetails;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'advertisingDealBrandedKeywordTargetDetails' => $this->advertisingDealBrandedKeywordTargetDetails->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDealBrandedKeywordTargetDetails: SBCreateAdvertisingDealBrandedKeywordTargetDetails::fromArray($data['advertisingDealBrandedKeywordTargetDetails']),
        );
    }
}

