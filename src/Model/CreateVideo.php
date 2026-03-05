<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateVideo
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

    public function setAssetId(string $assetId): self
    {
        $this->assetId = $assetId;

        return $this;
    }

    public function getAssetVersion(): string
    {
        return $this->assetVersion;
    }

    public function setAssetVersion(string $assetVersion): self
    {
        $this->assetVersion = $assetVersion;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(?string $headline): self
    {
        $this->headline = $headline;

        return $this;
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

