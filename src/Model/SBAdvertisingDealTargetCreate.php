<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealTargetCreate
{
    public function __construct(
        private string $advertisingDealId,
        private SBCreateAdvertisingDealTargetDetails $targetDetails,
        private SBAdvertisingDealTargetType $targetType,
    ) {
    }

    public function getAdvertisingDealId(): string
    {
        return $this->advertisingDealId;
    }

    public function setAdvertisingDealId(string $advertisingDealId): self
    {
        $this->advertisingDealId = $advertisingDealId;

        return $this;
    }

    public function getTargetDetails(): SBCreateAdvertisingDealTargetDetails
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(SBCreateAdvertisingDealTargetDetails $targetDetails): self
    {
        $this->targetDetails = $targetDetails;

        return $this;
    }

    public function getTargetType(): SBAdvertisingDealTargetType
    {
        return $this->targetType;
    }

    public function setTargetType(SBAdvertisingDealTargetType $targetType): self
    {
        $this->targetType = $targetType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'advertisingDealId' => $this->advertisingDealId,
            'targetDetails' => $this->targetDetails->toArray(),
            'targetType' => $this->targetType->value,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDealId: $data['advertisingDealId'],
            targetDetails: SBCreateAdvertisingDealTargetDetails::fromArray($data['targetDetails']),
            targetType: SBAdvertisingDealTargetType::from($data['targetType']),
        );
    }
}
