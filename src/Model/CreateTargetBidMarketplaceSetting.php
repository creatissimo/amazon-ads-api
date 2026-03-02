<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateTargetBidMarketplaceSetting
{
    public function __construct(
        private CurrencyCode $currencyCode,
        private Marketplace $marketplace,
        private ?float $bid = null,
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

    public function getBid(): ?float
    {
        return $this->bid;
    }

    public function setBid(?float $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'currencyCode' => $this->currencyCode->value,
            'marketplace' => $this->marketplace->value,
        ];

        if ($this->bid !== null) {
            $data['bid'] = $this->bid;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            currencyCode: CurrencyCode::from($data['currencyCode']),
            marketplace: Marketplace::from($data['marketplace']),
            bid: isset($data['bid']) ? (float) $data['bid'] : null,
        );
    }
}
