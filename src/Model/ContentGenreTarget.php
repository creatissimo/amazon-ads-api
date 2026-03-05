<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ContentGenreTarget
{
    public function __construct(
        private string $contentGenre,
    ) {
    }

    public function getContentGenre(): string
    {
        return $this->contentGenre;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contentGenre: $data['contentGenre'],
        );
    }
}

