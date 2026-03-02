<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateAdvertisingDealBrandedKeywordTargetDetails
{
    public function __construct(
        private string $brandedKeyword,
    ) {
    }

    public function getBrandedKeyword(): string
    {
        return $this->brandedKeyword;
    }

    public function setBrandedKeyword(string $brandedKeyword): self
    {
        $this->brandedKeyword = $brandedKeyword;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandedKeyword' => $this->brandedKeyword,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandedKeyword: $data['brandedKeyword'],
        );
    }
}

