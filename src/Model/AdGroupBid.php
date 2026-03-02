<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupBid
{
    public function __construct(
        private ?float $baseBid = null,
        private ?CurrencyCode $currencyCode = null,
        private ?float $defaultBid = null,
        private array $marketplaceSettings = [],
        private ?float $maxAverageBid = null,
    ) {
    }

    public function getBaseBid(): ?float
    {
        return $this->baseBid;
    }

    public function setBaseBid(?float $baseBid): self
    {
        $this->baseBid = $baseBid;

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

    public function getDefaultBid(): ?float
    {
        return $this->defaultBid;
    }

    public function setDefaultBid(?float $defaultBid): self
    {
        $this->defaultBid = $defaultBid;

        return $this;
    }

    /** @return AdGroupBidMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param AdGroupBidMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function getMaxAverageBid(): ?float
    {
        return $this->maxAverageBid;
    }

    public function setMaxAverageBid(?float $maxAverageBid): self
    {
        $this->maxAverageBid = $maxAverageBid;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            baseBid: isset($data['baseBid']) ? (float) $data['baseBid'] : null,
            currencyCode: isset($data['currencyCode']) ? CurrencyCode::from($data['currencyCode']) : null,
            defaultBid: isset($data['defaultBid']) ? (float) $data['defaultBid'] : null,
            marketplaceSettings: array_map(
                static fn(array $v) => AdGroupBidMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
            maxAverageBid: isset($data['maxAverageBid']) ? (float) $data['maxAverageBid'] : null,
        );
    }
}
