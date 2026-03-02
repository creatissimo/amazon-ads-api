<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateAdGroupBid
{
    public function __construct(
        private ?float $baseBid = null,
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

    public function getDefaultBid(): ?float
    {
        return $this->defaultBid;
    }

    public function setDefaultBid(?float $defaultBid): self
    {
        $this->defaultBid = $defaultBid;

        return $this;
    }

    /** @return CreateAdGroupBidMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param CreateAdGroupBidMarketplaceSetting[] $marketplaceSettings */
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

    public function toArray(): array
    {
        $data = [];

        if ($this->baseBid !== null) {
            $data['baseBid'] = $this->baseBid;
        }
        if ($this->defaultBid !== null) {
            $data['defaultBid'] = $this->defaultBid;
        }
        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(CreateAdGroupBidMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }
        if ($this->maxAverageBid !== null) {
            $data['maxAverageBid'] = $this->maxAverageBid;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            baseBid: isset($data['baseBid']) ? (float) $data['baseBid'] : null,
            defaultBid: isset($data['defaultBid']) ? (float) $data['defaultBid'] : null,
            marketplaceSettings: array_map(
                static fn(array $v) => CreateAdGroupBidMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
            maxAverageBid: isset($data['maxAverageBid']) ? (float) $data['maxAverageBid'] : null,
        );
    }
}
