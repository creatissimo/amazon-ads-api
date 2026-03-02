<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateBrandedKeywordsPricingRequest
{
    public function __construct(
        private array $brandedKeywordsPricings = [],
    ) {
    }

    /** @return SBBrandedKeywordsPricingCreate[] */
    public function getBrandedKeywordsPricings(): array
    {
        return $this->brandedKeywordsPricings;
    }

    /** @param SBBrandedKeywordsPricingCreate[] $brandedKeywordsPricings */
    public function setBrandedKeywordsPricings(array $brandedKeywordsPricings): self
    {
        $this->brandedKeywordsPricings = $brandedKeywordsPricings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->brandedKeywordsPricings !== []) {
            $data['brandedKeywordsPricings'] = array_map(
                static fn(SBBrandedKeywordsPricingCreate $v) => $v->toArray(),
                $this->brandedKeywordsPricings,
            );
        }

        return $data;
    }
}
