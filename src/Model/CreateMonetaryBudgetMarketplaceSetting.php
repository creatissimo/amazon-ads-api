<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMonetaryBudgetMarketplaceSetting
{
    public function __construct(
        private Marketplace $marketplace,
        private CreateMonetaryBudget $monetaryBudget,
    ) {
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

    public function getMonetaryBudget(): CreateMonetaryBudget
    {
        return $this->monetaryBudget;
    }

    public function setMonetaryBudget(CreateMonetaryBudget $monetaryBudget): self
    {
        $this->monetaryBudget = $monetaryBudget;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'marketplace' => $this->marketplace->value,
            'monetaryBudget' => $this->monetaryBudget->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            marketplace: Marketplace::from($data['marketplace']),
            monetaryBudget: CreateMonetaryBudget::fromArray($data['monetaryBudget']),
        );
    }
}

