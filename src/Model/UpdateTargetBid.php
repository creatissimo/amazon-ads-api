<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateTargetBid
{
    public function __construct(
        private ?float $bid = null,
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

    /** @return CreateTargetBidMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param CreateTargetBidMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->bid !== null) {
            $data['bid'] = $this->bid;
        }
        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(CreateTargetBidMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            bid: isset($data['bid']) ? (float) $data['bid'] : null,
            marketplaceSettings: array_map(
                static fn(array $v) => CreateTargetBidMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}
