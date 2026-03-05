<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ContentCategoryTarget
{
    public function __construct(
        private string $contentCategoryId,
    ) {
    }

    public function getContentCategoryId(): string
    {
        return $this->contentCategoryId;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contentCategoryId: $data['contentCategoryId'],
        );
    }
}

