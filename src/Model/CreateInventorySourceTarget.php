<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateInventorySourceTarget
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

    public function setInventorySourceId(array $inventorySourceId): self
    {
        $this->inventorySourceId = $inventorySourceId;

        return $this;
    }

    public function getInventorySourceType(): string
    {
        return $this->inventorySourceType;
    }

    public function setInventorySourceType(string $inventorySourceType): self
    {
        $this->inventorySourceType = $inventorySourceType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'inventorySourceId' => $this->inventorySourceId,
            'inventorySourceType' => $this->inventorySourceType,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            inventorySourceId: $data['inventorySourceId'],
            inventorySourceType: $data['inventorySourceType'],
        );
    }
}

