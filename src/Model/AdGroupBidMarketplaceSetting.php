<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupBidMarketplaceSetting
{
    public function __construct(
        private CurrencyCode $currencyCode,
        private Marketplace $marketplace,
        private ?float $defaultBid = null,
    ) {
    }

    public function getCurrencyCode(): CurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(CurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getMarketplace(): Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(Marketplace $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getDefaultBid(): ?float
    {
        return $this->defaultBid;
    }

    public function setDefaultBid(?float $defaultBid): self
    {
        $this->defaultBid = $defaultBid;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            currencyCode: CurrencyCode::from($data['currencyCode']),
            marketplace: Marketplace::from($data['marketplace']),
            defaultBid: isset($data['defaultBid']) ? (float) $data['defaultBid'] : null,
        );
    }
}
