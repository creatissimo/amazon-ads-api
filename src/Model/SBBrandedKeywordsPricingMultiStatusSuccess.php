<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandedKeywordsPricingMultiStatusSuccess
{
    public function __construct(
        private SBBrandedKeywordsPricing $brandedKeywordsPricing,
        private int $index,
    ) {
    }

    public function getBrandedKeywordsPricing(): SBBrandedKeywordsPricing
    {
        return $this->brandedKeywordsPricing;
    }

    public function setBrandedKeywordsPricing(SBBrandedKeywordsPricing $brandedKeywordsPricing): self
    {
        $this->brandedKeywordsPricing = $brandedKeywordsPricing;

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

    public static function fromArray(array $data): self
    {
        return new self(
            brandedKeywordsPricing: SBBrandedKeywordsPricing::fromArray($data['brandedKeywordsPricing']),
            index: (int) $data['index'],
        );
    }
}
