<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEditionPublishVersionUpdate
{
    public function __construct(
        private string $storeEditionPublishId,
        private ?string $editionId = null,
        private ?StorePublishState $publishState = null,
        private ?string $storeId = null,
    ) {
    }

    public function getStoreEditionPublishId(): string
    {
        return $this->storeEditionPublishId;
    }

    public function setStoreEditionPublishId(string $storeEditionPublishId): self
    {
        $this->storeEditionPublishId = $storeEditionPublishId;

        return $this;
    }

    public function getEditionId(): ?string
    {
        return $this->editionId;
    }

    public function setEditionId(?string $editionId): self
    {
        $this->editionId = $editionId;

        return $this;
    }

    public function getPublishState(): ?StorePublishState
    {
        return $this->publishState;
    }

    public function setPublishState(?StorePublishState $publishState): self
    {
        $this->publishState = $publishState;

        return $this;
    }

    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    public function setStoreId(?string $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'storeEditionPublishId' => $this->storeEditionPublishId,
        ];

        if ($this->editionId !== null) {
            $data['editionId'] = $this->editionId;
        }
        if ($this->publishState !== null) {
            $data['publishState'] = $this->publishState->value;
        }
        if ($this->storeId !== null) {
            $data['storeId'] = $this->storeId;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            storeEditionPublishId: $data['storeEditionPublishId'],
            editionId: $data['editionId'] ?? null,
            publishState: isset($data['publishState']) ? StorePublishState::from($data['publishState']) : null,
            storeId: $data['storeId'] ?? null,
        );
    }
}
