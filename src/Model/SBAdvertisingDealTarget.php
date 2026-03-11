<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealTarget
{
    public function __construct(
        private string $advertisingDealId,
        private string $advertisingDealTargetId,
        private SBAdvertisingDealTargetDetails $targetDetails,
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

    public function getAdvertisingDealTargetId(): string
    {
        return $this->advertisingDealTargetId;
    }

    public function setAdvertisingDealTargetId(string $advertisingDealTargetId): self
    {
        $this->advertisingDealTargetId = $advertisingDealTargetId;

        return $this;
    }

    public function getTargetDetails(): SBAdvertisingDealTargetDetails
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(SBAdvertisingDealTargetDetails $targetDetails): self
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
        $data = [
            'advertisingDealId' => $this->advertisingDealId,
            'advertisingDealTargetId' => $this->advertisingDealTargetId,
            'targetDetails' => $this->targetDetails->toArray(),
            'targetType' => $this->targetType->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDealId: $data['advertisingDealId'],
            advertisingDealTargetId: $data['advertisingDealTargetId'],
            targetDetails: SBAdvertisingDealTargetDetails::fromArray($data['targetDetails']),
            targetType: SBAdvertisingDealTargetType::from($data['targetType']),
        );
    }
}
