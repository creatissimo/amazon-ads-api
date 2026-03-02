<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealTargetDetails
{
    public function __construct(
        private SBAdvertisingDealBrandedKeywordTargetDetails $advertisingDealBrandedKeywordTargetDetails,
    ) {
    }

    public function getAdvertisingDealBrandedKeywordTargetDetails(): SBAdvertisingDealBrandedKeywordTargetDetails
    {
        return $this->advertisingDealBrandedKeywordTargetDetails;
    }

    public function setAdvertisingDealBrandedKeywordTargetDetails(SBAdvertisingDealBrandedKeywordTargetDetails $advertisingDealBrandedKeywordTargetDetails): self
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
            advertisingDealBrandedKeywordTargetDetails: SBAdvertisingDealBrandedKeywordTargetDetails::fromArray($data['advertisingDealBrandedKeywordTargetDetails']),
        );
    }
}

