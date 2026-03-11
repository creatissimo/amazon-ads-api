<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class VideoAdFormatTarget
{
    public function __construct(
        private string $videoAdFormat,
    ) {
    }

    public function getVideoAdFormat(): string
    {
        return $this->videoAdFormat;
    }

    public function toArray(): array
    {
        $data = [
            'videoAdFormat' => $this->videoAdFormat,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            videoAdFormat: $data['videoAdFormat'],
        );
    }
}

