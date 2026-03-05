<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateContentGenreTarget
{
    public function __construct(
        private string $contentGenre,
    ) {
    }

    public function getContentGenre(): string
    {
        return $this->contentGenre;
    }

    public function setContentGenre(string $contentGenre): self
    {
        $this->contentGenre = $contentGenre;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'contentGenre' => $this->contentGenre,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contentGenre: $data['contentGenre'],
        );
    }
}

