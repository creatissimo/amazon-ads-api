<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdInitiationTarget
{
    public function __construct(
        private string $videoInitiationType,
    ) {
    }

    public function getVideoInitiationType(): string
    {
        return $this->videoInitiationType;
    }

    public function toArray(): array
    {
        $data = [
            'videoInitiationType' => $this->videoInitiationType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            videoInitiationType: $data['videoInitiationType'],
        );
    }
}

