<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdAdProductFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return AdProduct[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param AdProduct[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(AdProduct $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => AdProduct::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
