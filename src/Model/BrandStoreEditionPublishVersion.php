<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEditionPublishVersion
{
    public function __construct(
        private string $editionId,
        private StorePublishState $publishState,
        private StorePublishStatus $publishStatus,
        private string $storeEditionPublishId,
        private string $storeId,
        private array $pages = [],
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

    public function getPublishState(): StorePublishState
    {
        return $this->publishState;
    }

    public function setPublishState(StorePublishState $publishState): self
    {
        $this->publishState = $publishState;

        return $this;
    }

    public function getPublishStatus(): StorePublishStatus
    {
        return $this->publishStatus;
    }

    public function setPublishStatus(StorePublishStatus $publishStatus): self
    {
        $this->publishStatus = $publishStatus;

        return $this;
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

    public function getStoreId(): string
    {
        return $this->storeId;
    }

    public function setStoreId(string $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    /** @return StorePageVersion[] */
    public function getPages(): array
    {
        return $this->pages;
    }

    /** @param StorePageVersion[] $pages */
    public function setPages(array $pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            editionId: $data['editionId'],
            publishState: StorePublishState::from($data['publishState']),
            publishStatus: StorePublishStatus::from($data['publishStatus']),
            storeEditionPublishId: $data['storeEditionPublishId'],
            storeId: $data['storeId'],
            pages: array_map(
                static fn(array $v) => StorePageVersion::fromArray($v),
                $data['pages'] ?? [],
            ),
        );
    }
}
