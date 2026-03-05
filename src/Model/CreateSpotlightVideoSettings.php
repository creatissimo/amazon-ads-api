<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateSpotlightVideoSettings
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

    public function setOptimizeText(bool $optimizeText): self
    {
        $this->optimizeText = $optimizeText;

        return $this;
    }

    /** @return CreateVideo[] */
    public function getVideos(): array
    {
        return $this->videos;
    }

    /** @param CreateVideo[] $videos */
    public function setVideos(array $videos): self
    {
        $this->videos = $videos;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'optimizeText' => $this->optimizeText,
            'videos' => array_map(
                static fn(CreateVideo $v) => $v->toArray(),
                $this->videos,
            ),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            optimizeText: (bool) $data['optimizeText'],
            videos: array_map(
                static fn(array $v) => CreateVideo::fromArray($v),
                $data['videos'],
            ),
        );
    }
}

