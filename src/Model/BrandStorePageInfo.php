<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStorePageInfo
{
    public function __construct(
        private string $tag,
        private string $title,
    ) {
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'tag' => $this->tag,
            'title' => $this->title,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            tag: $data['tag'],
            title: $data['title'],
        );
    }
}
