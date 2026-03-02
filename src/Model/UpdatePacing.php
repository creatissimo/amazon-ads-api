<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdatePacing
{
    public function __construct(
        private ?DeliveryProfile $deliveryProfile = null,
    ) {
    }

    public function getDeliveryProfile(): ?DeliveryProfile
    {
        return $this->deliveryProfile;
    }

    public function setDeliveryProfile(?DeliveryProfile $deliveryProfile): self
    {
        $this->deliveryProfile = $deliveryProfile;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->deliveryProfile !== null) {
            $data['deliveryProfile'] = $this->deliveryProfile->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            deliveryProfile: isset($data['deliveryProfile']) ? DeliveryProfile::from($data['deliveryProfile']) : null,
        );
    }
}
