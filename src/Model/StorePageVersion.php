<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class StorePageVersion
{
    public function __construct(
        private string $pageId,
        private int $version,
    ) {
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

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setVersion(int $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'pageId' => $this->pageId,
            'version' => $this->version,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            pageId: $data['pageId'],
            version: (int) $data['version'],
        );
    }
}
