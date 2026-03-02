<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetBid
{
    public function __construct(
        private ?float $bid = null,
        private ?CurrencyCode $currencyCode = null,
        private array $marketplaceSettings = [],
    ) {
    }

    public function getBid(): ?float
    {
        return $this->bid;
    }

    public function setBid(?float $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    public function getCurrencyCode(): ?CurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?CurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /** @return TargetBidMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param TargetBidMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            bid: isset($data['bid']) ? (float) $data['bid'] : null,
            currencyCode: isset($data['currencyCode']) ? CurrencyCode::from($data['currencyCode']) : null,
            marketplaceSettings: array_map(
                static fn(array $v) => TargetBidMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}
