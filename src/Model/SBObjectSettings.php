<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBObjectSettings
{
    public function __construct(
        private SBBrandedKeywordList $brandedKeywordList,
    ) {
    }

    public function getBrandedKeywordList(): SBBrandedKeywordList
    {
        return $this->brandedKeywordList;
    }

    public function setBrandedKeywordList(SBBrandedKeywordList $brandedKeywordList): self
    {
        $this->brandedKeywordList = $brandedKeywordList;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandedKeywordList' => $this->brandedKeywordList->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandedKeywordList: SBBrandedKeywordList::fromArray($data['brandedKeywordList']),
        );
    }
}

