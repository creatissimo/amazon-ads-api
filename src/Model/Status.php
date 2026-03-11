<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Status
{
    public function __construct(
        private DeliveryStatus $deliveryStatus,
        private array $deliveryReasons = [],
        private array $marketplaceSettings = [],
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

    /** @return StatusMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param StatusMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'deliveryStatus' => $this->deliveryStatus->value,
        ];

        if ($this->deliveryReasons !== []) {
            $data['deliveryReasons'] = array_map(
                static fn(DeliveryReason $v) => $v->value,
                $this->deliveryReasons,
            );
        }
        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(StatusMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            deliveryStatus: DeliveryStatus::from($data['deliveryStatus']),
            deliveryReasons: array_map(
                static fn(string $v) => DeliveryReason::from($v),
                $data['deliveryReasons'] ?? [],
            ),
            marketplaceSettings: array_map(
                static fn(array $v) => StatusMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}
