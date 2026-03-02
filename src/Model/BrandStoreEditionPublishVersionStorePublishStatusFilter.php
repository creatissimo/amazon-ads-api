<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreEditionPublishVersionStorePublishStatusFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return StorePublishStatus[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param StorePublishStatus[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(StorePublishStatus $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => StorePublishStatus::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
