<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStorePage
{
    public function __construct(
        private StorePageContent $content,
        private string $editionId,
        private string $pageId,
        private StorePageType $pageType,
        private string $storeId,
        private ?string $storeEditionPublishId = null,
    ) {
    }

    public function getContent(): StorePageContent
    {
        return $this->content;
    }

    public function setContent(StorePageContent $content): self
    {
        $this->content = $content;

        return $this;
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

    public function getPageId(): string
    {
        return $this->pageId;
    }

    public function setPageId(string $pageId): self
    {
        $this->pageId = $pageId;

        return $this;
    }

    public function getPageType(): StorePageType
    {
        return $this->pageType;
    }

    public function setPageType(StorePageType $pageType): self
    {
        $this->pageType = $pageType;

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

    public function getStoreEditionPublishId(): ?string
    {
        return $this->storeEditionPublishId;
    }

    public function setStoreEditionPublishId(?string $storeEditionPublishId): self
    {
        $this->storeEditionPublishId = $storeEditionPublishId;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'content' => $this->content->toArray(),
            'editionId' => $this->editionId,
            'pageId' => $this->pageId,
            'pageType' => $this->pageType->value,
            'storeId' => $this->storeId,
        ];

        if ($this->storeEditionPublishId !== null) {
            $data['storeEditionPublishId'] = $this->storeEditionPublishId;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            content: StorePageContent::fromArray($data['content']),
            editionId: $data['editionId'],
            pageId: $data['pageId'],
            pageType: StorePageType::from($data['pageType']),
            storeId: $data['storeId'],
            storeEditionPublishId: $data['storeEditionPublishId'] ?? null,
        );
    }
}
