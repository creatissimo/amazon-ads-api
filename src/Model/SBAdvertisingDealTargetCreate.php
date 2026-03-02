<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealTargetCreate
{
    public function __construct(
        private string $advertisingDealId,
        private mixed $targetDetails,
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

    public function getTargetDetails(): mixed
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(mixed $targetDetails): self
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
            'targetDetails' => $this->targetDetails,
            'targetType' => $this->targetType->value,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDealId: $data['advertisingDealId'],
            targetDetails: $data['targetDetails'],
            targetType: SBAdvertisingDealTargetType::from($data['targetType']),
        );
    }
}
