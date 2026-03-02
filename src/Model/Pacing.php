<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Pacing
{
    public function __construct(
        private DeliveryProfile $deliveryProfile,
    ) {
    }

    public function getDeliveryProfile(): DeliveryProfile
    {
        return $this->deliveryProfile;
    }

    public function setDeliveryProfile(DeliveryProfile $deliveryProfile): self
    {
        $this->deliveryProfile = $deliveryProfile;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            deliveryProfile: DeliveryProfile::from($data['deliveryProfile']),
        );
    }
}
