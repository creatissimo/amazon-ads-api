<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateSpotlightVideoSettings
{
    public function __construct(
        private ?bool $optimizeText = null,
        private ?array $videos = null,
    ) {
    }

    public function getOptimizeText(): ?bool
    {
        return $this->optimizeText;
    }

    public function setOptimizeText(?bool $optimizeText): self
    {
        $this->optimizeText = $optimizeText;

        return $this;
    }

    /** @return CreateVideo[]|null */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /** @param CreateVideo[]|null $videos */
    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->optimizeText !== null) {
            $data['optimizeText'] = $this->optimizeText;
        }
        if ($this->videos !== null) {
            $data['videos'] = array_map(
                static fn(CreateVideo $v) => $v->toArray(),
                $this->videos,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            optimizeText: $data['optimizeText'] ?? null,
            videos: isset($data['videos']) ? array_map(
                static fn(array $v) => CreateVideo::fromArray($v),
                $data['videos'],
            ) : null,
        );
    }
}

