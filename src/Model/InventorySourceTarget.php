<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class InventorySourceTarget
{
    public function __construct(
        private array $inventorySourceId,
        private string $inventorySourceType,
    ) {
    }

    public function getInventorySourceId(): array
    {
        return $this->inventorySourceId;
    }

    public function getInventorySourceType(): string
    {
        return $this->inventorySourceType;
    }

    public function toArray(): array
    {
        $data = [
            'inventorySourceId' => $this->inventorySourceId,
            'inventorySourceType' => $this->inventorySourceType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            inventorySourceId: $data['inventorySourceId'],
            inventorySourceType: $data['inventorySourceType'],
        );
    }
}

