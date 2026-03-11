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

    public function toArray(): array
    {
        $data = [
            'duration' => $this->duration,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            duration: $data['duration'],
        );
    }
}

