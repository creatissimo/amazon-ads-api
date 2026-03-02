<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BudgetSettings
{
    public function __construct(
        private ?BudgetAllocation $budgetAllocation = null,
        private ?RolloverStrategy $flightBudgetRolloverStrategy = null,
        private ?MarketplaceBudgetAllocation $marketplaceBudgetAllocation = null,
        private ?OffAmazonBudgetControlStrategy $offAmazonBudgetControlStrategy = null,
    ) {
    }

    public function getBudgetAllocation(): ?BudgetAllocation
    {
        return $this->budgetAllocation;
    }

    public function setBudgetAllocation(?BudgetAllocation $budgetAllocation): self
    {
        $this->budgetAllocation = $budgetAllocation;

        return $this;
    }

    public function getFlightBudgetRolloverStrategy(): ?RolloverStrategy
    {
        return $this->flightBudgetRolloverStrategy;
    }

    public function setFlightBudgetRolloverStrategy(?RolloverStrategy $flightBudgetRolloverStrategy): self
    {
        $this->flightBudgetRolloverStrategy = $flightBudgetRolloverStrategy;

        return $this;
    }

    public function getMarketplaceBudgetAllocation(): ?MarketplaceBudgetAllocation
    {
        return $this->marketplaceBudgetAllocation;
    }

    public function setMarketplaceBudgetAllocation(?MarketplaceBudgetAllocation $marketplaceBudgetAllocation): self
    {
        $this->marketplaceBudgetAllocation = $marketplaceBudgetAllocation;

        return $this;
    }

    public function getOffAmazonBudgetControlStrategy(): ?OffAmazonBudgetControlStrategy
    {
        return $this->offAmazonBudgetControlStrategy;
    }

    public function setOffAmazonBudgetControlStrategy(?OffAmazonBudgetControlStrategy $offAmazonBudgetControlStrategy): self
    {
        $this->offAmazonBudgetControlStrategy = $offAmazonBudgetControlStrategy;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            budgetAllocation: isset($data['budgetAllocation']) ? BudgetAllocation::from($data['budgetAllocation']) : null,
            flightBudgetRolloverStrategy: isset($data['flightBudgetRolloverStrategy']) ? RolloverStrategy::from($data['flightBudgetRolloverStrategy']) : null,
            marketplaceBudgetAllocation: isset($data['marketplaceBudgetAllocation']) ? MarketplaceBudgetAllocation::from($data['marketplaceBudgetAllocation']) : null,
            offAmazonBudgetControlStrategy: isset($data['offAmazonBudgetControlStrategy']) ? OffAmazonBudgetControlStrategy::from($data['offAmazonBudgetControlStrategy']) : null,
        );
    }
}
