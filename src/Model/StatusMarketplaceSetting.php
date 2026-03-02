<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class StatusMarketplaceSetting
{
    public function __construct(
        private DeliveryStatus $deliveryStatus,
        private Marketplace $marketplace,
        private array $deliveryReasons = [],
    ) {
    }

    public function getDeliveryStatus(): DeliveryStatus
    {
        return $this->deliveryStatus;
    }

    public function setDeliveryStatus(DeliveryStatus $deliveryStatus): self
    {
        $this->deliveryStatus = $deliveryStatus;

        return $this;
    }

    public function getMarketplace(): Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(Marketplace $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /** @return DeliveryReason[] */
    public function getDeliveryReasons(): array
    {
        return $this->deliveryReasons;
    }

    /** @param DeliveryReason[] $deliveryReasons */
    public function setDeliveryReasons(array $deliveryReasons): self
    {
        $this->deliveryReasons = $deliveryReasons;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            deliveryStatus: DeliveryStatus::from($data['deliveryStatus']),
            marketplace: Marketplace::from($data['marketplace']),
            deliveryReasons: array_map(
                static fn(string $v) => DeliveryReason::from($v),
                $data['deliveryReasons'] ?? [],
            ),
        );
    }
}
