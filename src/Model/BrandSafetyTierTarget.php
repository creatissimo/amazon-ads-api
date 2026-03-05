<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandSafetyTierTarget
{
    public function __construct(
        private string $brandSafetyTier,
    ) {
    }

    public function getBrandSafetyTier(): string
    {
        return $this->brandSafetyTier;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandSafetyTier: $data['brandSafetyTier'],
        );
    }
}

