<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandSafetyCategoryTarget
{
    public function __construct(
        private string $brandSafetyCategory,
    ) {
    }

    public function getBrandSafetyCategory(): string
    {
        return $this->brandSafetyCategory;
    }

    public function toArray(): array
    {
        $data = [
            'brandSafetyCategory' => $this->brandSafetyCategory,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandSafetyCategory: $data['brandSafetyCategory'],
        );
    }
}

