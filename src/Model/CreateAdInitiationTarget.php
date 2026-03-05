<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdInitiationTarget
{
    public function __construct(
        private string $videoInitiationType,
    ) {
    }

    public function getVideoInitiationType(): string
    {
        return $this->videoInitiationType;
    }

    public function setVideoInitiationType(string $videoInitiationType): self
    {
        $this->videoInitiationType = $videoInitiationType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'videoInitiationType' => $this->videoInitiationType,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            videoInitiationType: $data['videoInitiationType'],
        );
    }
}

