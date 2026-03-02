<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MonetaryBudgetValue
{
    /**
     * @param MonetaryBudgetMarketplaceSetting[] $marketplaceSettings
     */
    public function __construct(
        private ?MonetaryBudget $monetaryBudget = null,
        private array $marketplaceSettings = [],
    ) {
    }

    public function getMonetaryBudget(): ?MonetaryBudget
    {
        return $this->monetaryBudget;
    }

    public function setMonetaryBudget(?MonetaryBudget $monetaryBudget): self
    {
        $this->monetaryBudget = $monetaryBudget;

        return $this;
    }

    /** @return MonetaryBudgetMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param MonetaryBudgetMarketplaceSetting[] $marketplaceSettings */
    public function setMarketplaceSettings(array $marketplaceSettings): self
    {
        $this->marketplaceSettings = $marketplaceSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->monetaryBudget !== null) {
            $data['monetaryBudget'] = $this->monetaryBudget->toArray();
        }

        if ($this->marketplaceSettings !== []) {
            $data['marketplaceSettings'] = array_map(
                static fn(MonetaryBudgetMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            monetaryBudget: isset($data['monetaryBudget']) ? MonetaryBudget::fromArray($data['monetaryBudget']) : null,
            marketplaceSettings: array_map(
                static fn(array $v) => MonetaryBudgetMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}

