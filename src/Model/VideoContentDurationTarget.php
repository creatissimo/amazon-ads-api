<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class VideoContentDurationTarget
{
    public function __construct(
        private string $duration,
    ) {
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            duration: $data['duration'],
        );
    }
}

