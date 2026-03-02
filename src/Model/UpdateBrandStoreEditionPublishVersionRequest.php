<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateBrandStoreEditionPublishVersionRequest
{
    public function __construct(
        private array $brandStoreEditionPublishVersions = [],
    ) {
    }

    /** @return BrandStoreEditionPublishVersionUpdate[] */
    public function getBrandStoreEditionPublishVersions(): array
    {
        return $this->brandStoreEditionPublishVersions;
    }

    /** @param BrandStoreEditionPublishVersionUpdate[] $brandStoreEditionPublishVersions */
    public function setBrandStoreEditionPublishVersions(array $brandStoreEditionPublishVersions): self
    {
        $this->brandStoreEditionPublishVersions = $brandStoreEditionPublishVersions;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->brandStoreEditionPublishVersions !== []) {
            $data['brandStoreEditionPublishVersions'] = array_map(
                static fn(BrandStoreEditionPublishVersionUpdate $v) => $v->toArray(),
                $this->brandStoreEditionPublishVersions,
            );
        }

        return $data;
    }
}
