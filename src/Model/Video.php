<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Video
{
    public function __construct(
        private string $assetId,
        private string $assetVersion,
        private ?string $description = null,
        private ?string $headline = null,
    ) {
    }

    public function getAssetId(): string
    {
        return $this->assetId;
    }

    public function getAssetVersion(): string
    {
        return $this->assetVersion;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function toArray(): array
    {
        $data = [
            'assetId' => $this->assetId,
            'assetVersion' => $this->assetVersion,
        ];

        if ($this->description !== null) {
            $data['description'] = $this->description;
        }
        if ($this->headline !== null) {
            $data['headline'] = $this->headline;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            assetId: $data['assetId'],
            assetVersion: $data['assetVersion'],
            description: $data['description'] ?? null,
            headline: $data['headline'] ?? null,
        );
    }
}

