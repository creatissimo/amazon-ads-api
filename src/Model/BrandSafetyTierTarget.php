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

    public function toArray(): array
    {
        $data = [
            'brandSafetyTier' => $this->brandSafetyTier,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandSafetyTier: $data['brandSafetyTier'],
        );
    }
}

