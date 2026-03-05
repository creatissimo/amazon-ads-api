<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateContentCategoryTarget
{
    public function __construct(
        private string $contentCategoryId,
    ) {
    }

    public function getContentCategoryId(): string
    {
        return $this->contentCategoryId;
    }

    public function setContentCategoryId(string $contentCategoryId): self
    {
        $this->contentCategoryId = $contentCategoryId;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'contentCategoryId' => $this->contentCategoryId,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contentCategoryId: $data['contentCategoryId'],
        );
    }
}

