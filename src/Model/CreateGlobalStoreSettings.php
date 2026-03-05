<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateGlobalStoreSettings
{
    public function __construct(
        private ?Marketplace $catalogSourceMarketplace = null,
    ) {
    }

    public function getCatalogSourceMarketplace(): ?Marketplace
    {
        return $this->catalogSourceMarketplace;
    }

    public function setCatalogSourceMarketplace(?Marketplace $catalogSourceMarketplace): self
    {
        $this->catalogSourceMarketplace = $catalogSourceMarketplace;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->catalogSourceMarketplace !== null) {
            $data['catalogSourceMarketplace'] = $this->catalogSourceMarketplace->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            catalogSourceMarketplace: isset($data['catalogSourceMarketplace']) ? Marketplace::from($data['catalogSourceMarketplace']) : null,
        );
    }
}

