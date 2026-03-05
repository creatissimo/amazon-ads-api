<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SpotlightVideoSettings
{
    public function __construct(
        private bool $optimizeText,
        private array $videos,
    ) {
    }

    public function isOptimizeText(): bool
    {
        return $this->optimizeText;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }

    public function toArray(): array
    {
        return [
            'optimizeText' => $this->optimizeText,
            'videos' => array_map(
                static fn(Video $v) => $v->toArray(),
                $this->videos,
            ),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            optimizeText: (bool) $data['optimizeText'],
            videos: array_map(
                static fn(array $v) => Video::fromArray($v),
                $data['videos'],
            ),
        );
    }
}

