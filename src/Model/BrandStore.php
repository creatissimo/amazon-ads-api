<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStore
{
    public function __construct(
        private string $storeId,
        private array $pageInfos = [],
        private ?string $storeName = null,
    ) {
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

    /** @return BrandStorePageInfo[] */
    public function getPageInfos(): array
    {
        return $this->pageInfos;
    }

    /** @param BrandStorePageInfo[] $pageInfos */
    public function setPageInfos(array $pageInfos): self
    {
        $this->pageInfos = $pageInfos;

        return $this;
    }

    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    public function setStoreName(?string $storeName): self
    {
        $this->storeName = $storeName;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'storeId' => $this->storeId,
        ];

        if ($this->pageInfos !== []) {
            $data['pageInfos'] = array_map(
                static fn(BrandStorePageInfo $v) => $v->toArray(),
                $this->pageInfos,
            );
        }
        if ($this->storeName !== null) {
            $data['storeName'] = $this->storeName;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            storeId: $data['storeId'],
            pageInfos: array_map(
                static fn(array $v) => BrandStorePageInfo::fromArray($v),
                $data['pageInfos'] ?? [],
            ),
            storeName: $data['storeName'] ?? null,
        );
    }
}
