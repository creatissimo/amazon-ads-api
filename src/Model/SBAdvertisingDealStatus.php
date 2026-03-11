<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealStatus
{
    public function __construct(
        private SBAdvertisingDealStatusEnum $status,
    ) {
    }

    public function getStatus(): SBAdvertisingDealStatusEnum
    {
        return $this->status;
    }

    public function setStatus(SBAdvertisingDealStatusEnum $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'status' => $this->status->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            status: SBAdvertisingDealStatusEnum::from($data['status']),
        );
    }
}
