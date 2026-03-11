<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEditionPublishVersionSuccessResponse
{
    public function __construct(
        private array $brandStoreEditionPublishVersions = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return BrandStoreEditionPublishVersion[] */
    public function getBrandStoreEditionPublishVersions(): array
    {
        return $this->brandStoreEditionPublishVersions;
    }

    /** @param BrandStoreEditionPublishVersion[] $brandStoreEditionPublishVersions */
    public function setBrandStoreEditionPublishVersions(array $brandStoreEditionPublishVersions): self
    {
        $this->brandStoreEditionPublishVersions = $brandStoreEditionPublishVersions;

        return $this;
    }

    public function getNextToken(): ?string
    {
        return $this->nextToken;
    }

    public function setNextToken(?string $nextToken): self
    {
        $this->nextToken = $nextToken;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->brandStoreEditionPublishVersions !== []) {
            $data['brandStoreEditionPublishVersions'] = array_map(
                static fn(BrandStoreEditionPublishVersion $v) => $v->toArray(),
                $this->brandStoreEditionPublishVersions,
            );
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandStoreEditionPublishVersions: array_map(
                static fn(array $v) => BrandStoreEditionPublishVersion::fromArray($v),
                $data['brandStoreEditionPublishVersions'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
