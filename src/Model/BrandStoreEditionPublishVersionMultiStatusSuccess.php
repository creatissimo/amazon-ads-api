<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEditionPublishVersionMultiStatusSuccess
{
    public function __construct(
        private BrandStoreEditionPublishVersion $brandStoreEditionPublishVersion,
        private int $index,
    ) {
    }

    public function getBrandStoreEditionPublishVersion(): BrandStoreEditionPublishVersion
    {
        return $this->brandStoreEditionPublishVersion;
    }

    public function setBrandStoreEditionPublishVersion(BrandStoreEditionPublishVersion $brandStoreEditionPublishVersion): self
    {
        $this->brandStoreEditionPublishVersion = $brandStoreEditionPublishVersion;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'brandStoreEditionPublishVersion' => $this->brandStoreEditionPublishVersion->toArray(),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandStoreEditionPublishVersion: BrandStoreEditionPublishVersion::fromArray($data['brandStoreEditionPublishVersion']),
            index: (int) $data['index'],
        );
    }
}
