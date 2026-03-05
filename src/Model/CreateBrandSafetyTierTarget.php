<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateBrandSafetyTierTarget
{
    public function __construct(
        private string $brandSafetyTier,
    ) {
    }

    public function getBrandSafetyTier(): string
    {
        return $this->brandSafetyTier;
    }

    public function setBrandSafetyTier(string $brandSafetyTier): self
    {
        $this->brandSafetyTier = $brandSafetyTier;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandSafetyTier' => $this->brandSafetyTier,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandSafetyTier: $data['brandSafetyTier'],
        );
    }
}

