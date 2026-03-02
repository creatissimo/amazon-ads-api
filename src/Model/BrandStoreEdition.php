<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEdition
{
    public function __construct(
        private string $editionId,
        private string $editionName,
        private string $storeId,
        private ?StoreEditionSchedule $storeEditionSchedule = null,
    ) {
    }

    public function getEditionId(): string
    {
        return $this->editionId;
    }

    public function setEditionId(string $editionId): self
    {
        $this->editionId = $editionId;

        return $this;
    }

    public function getEditionName(): string
    {
        return $this->editionName;
    }

    public function setEditionName(string $editionName): self
    {
        $this->editionName = $editionName;

        return $this;
    }

    public function getStoreId(): string
    {
        return $this->storeId;
    }

    public function setStoreId(string $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    public function getStoreEditionSchedule(): ?StoreEditionSchedule
    {
        return $this->storeEditionSchedule;
    }

    public function setStoreEditionSchedule(?StoreEditionSchedule $storeEditionSchedule): self
    {
        $this->storeEditionSchedule = $storeEditionSchedule;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            editionId: $data['editionId'],
            editionName: $data['editionName'],
            storeId: $data['storeId'],
            storeEditionSchedule: isset($data['storeEditionSchedule']) ? StoreEditionSchedule::fromArray($data['storeEditionSchedule']) : null,
        );
    }
}
