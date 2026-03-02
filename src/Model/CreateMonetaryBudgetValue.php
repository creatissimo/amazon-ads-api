<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMonetaryBudgetValue
{
    /**
     * @param CreateMonetaryBudgetMarketplaceSetting[] $marketplaceSettings
     */
    public function __construct(
        private ?CreateMonetaryBudget $monetaryBudget = null,
        private array $marketplaceSettings = [],
    ) {
    }

    public function getMonetaryBudget(): ?CreateMonetaryBudget
    {
        return $this->monetaryBudget;
    }

    public function setMonetaryBudget(?CreateMonetaryBudget $monetaryBudget): self
    {
        $this->monetaryBudget = $monetaryBudget;

        return $this;
    }

    /** @return CreateMonetaryBudgetMarketplaceSetting[] */
    public function getMarketplaceSettings(): array
    {
        return $this->marketplaceSettings;
    }

    /** @param CreateMonetaryBudgetMarketplaceSetting[] $marketplaceSettings */
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
                static fn(CreateMonetaryBudgetMarketplaceSetting $v) => $v->toArray(),
                $this->marketplaceSettings,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            monetaryBudget: isset($data['monetaryBudget']) ? CreateMonetaryBudget::fromArray($data['monetaryBudget']) : null,
            marketplaceSettings: array_map(
                static fn(array $v) => CreateMonetaryBudgetMarketplaceSetting::fromArray($v),
                $data['marketplaceSettings'] ?? [],
            ),
        );
    }
}

