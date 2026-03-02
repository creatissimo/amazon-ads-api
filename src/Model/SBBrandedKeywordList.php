<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandedKeywordList
{
    /**
     * @param SBBrandedKeyword[] $brandedKeyword
     */
    public function __construct(
        private array $brandedKeyword = [],
    ) {
    }

    /** @return SBBrandedKeyword[] */
    public function getBrandedKeyword(): array
    {
        return $this->brandedKeyword;
    }

    /** @param SBBrandedKeyword[] $brandedKeyword */
    public function setBrandedKeyword(array $brandedKeyword): self
    {
        $this->brandedKeyword = $brandedKeyword;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->brandedKeyword !== []) {
            $data['brandedKeyword'] = array_map(
                static fn(SBBrandedKeyword $v) => $v->toArray(),
                $this->brandedKeyword,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandedKeyword: array_map(
                static fn(array $v) => SBBrandedKeyword::fromArray($v),
                $data['brandedKeyword'] ?? [],
            ),
        );
    }
}

