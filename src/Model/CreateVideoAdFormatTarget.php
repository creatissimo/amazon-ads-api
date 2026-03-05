<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateVideoAdFormatTarget
{
    public function __construct(
        private string $videoAdFormat,
    ) {
    }

    public function getVideoAdFormat(): string
    {
        return $this->videoAdFormat;
    }

    public function setVideoAdFormat(string $videoAdFormat): self
    {
        $this->videoAdFormat = $videoAdFormat;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'videoAdFormat' => $this->videoAdFormat,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            videoAdFormat: $data['videoAdFormat'],
        );
    }
}

