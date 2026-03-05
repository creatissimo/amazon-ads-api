<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateVideoCreative
{
    public function __construct(
        private ?array $onlineVideoSettings = null,
        private ?array $streamingTvSettings = null,
    ) {
    }

    public function getOnlineVideoSettings(): ?array
    {
        return $this->onlineVideoSettings;
    }

    public function setOnlineVideoSettings(?array $onlineVideoSettings): self
    {
        $this->onlineVideoSettings = $onlineVideoSettings;

        return $this;
    }

    public function getStreamingTvSettings(): ?array
    {
        return $this->streamingTvSettings;
    }

    public function setStreamingTvSettings(?array $streamingTvSettings): self
    {
        $this->streamingTvSettings = $streamingTvSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->onlineVideoSettings !== null) {
            $data['onlineVideoSettings'] = $this->onlineVideoSettings;
        }
        if ($this->streamingTvSettings !== null) {
            $data['streamingTvSettings'] = $this->streamingTvSettings;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            onlineVideoSettings: $data['onlineVideoSettings'] ?? null,
            streamingTvSettings: $data['streamingTvSettings'] ?? null,
        );
    }
}

