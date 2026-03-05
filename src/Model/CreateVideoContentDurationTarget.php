<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateVideoContentDurationTarget
{
    public function __construct(
        private string $duration,
    ) {
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'duration' => $this->duration,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            duration: $data['duration'],
        );
    }
}

