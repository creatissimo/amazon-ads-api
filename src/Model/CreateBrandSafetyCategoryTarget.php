<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateBrandSafetyCategoryTarget
{
    public function __construct(
        private string $brandSafetyCategory,
    ) {
    }

    public function getBrandSafetyCategory(): string
    {
        return $this->brandSafetyCategory;
    }

    public function setBrandSafetyCategory(string $brandSafetyCategory): self
    {
        $this->brandSafetyCategory = $brandSafetyCategory;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandSafetyCategory' => $this->brandSafetyCategory,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandSafetyCategory: $data['brandSafetyCategory'],
        );
    }
}

