<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignUpdate
{
    public function __construct(
        private string $campaignId,
        private ?AdProduct $adProduct = null,
        private ?State $state = null,
        private ?string $name = null,
        private ?CostType $costType = null,
        private ?string $startDateTime = null,
        private ?string $endDateTime = null,
        private ?string $portfolioId = null,
        private ?string $purchaseOrderNumber = null,
        private array $budgets = [],
        private array $countries = [],
    ) {
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setCampaignId(string $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    public function getAdProduct(): ?AdProduct
    {
        return $this->adProduct;
    }

    public function setAdProduct(?AdProduct $adProduct): self
    {
        $this->adProduct = $adProduct;

        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCostType(): ?CostType
    {
        return $this->costType;
    }

    public function setCostType(?CostType $costType): self
    {
        $this->costType = $costType;

        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

        return $this;
    }

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

        return $this;
    }

    public function getPortfolioId(): ?string
    {
        return $this->portfolioId;
    }

    public function setPortfolioId(?string $portfolioId): self
    {
        $this->portfolioId = $portfolioId;

        return $this;
    }

    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }

    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }

    /** @return Budget[] */
    public function getBudgets(): array
    {
        return $this->budgets;
    }

    /** @param Budget[] $budgets */
    public function setBudgets(array $budgets): self
    {
        $this->budgets = $budgets;

        return $this;
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setCountries(array $countries): self
    {
        $this->countries = $countries;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'campaignId' => $this->campaignId,
        ];

        if ($this->adProduct !== null) {
            $data['adProduct'] = $this->adProduct->value;
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->costType !== null) {
            $data['costType'] = $this->costType->value;
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->portfolioId !== null) {
            $data['portfolioId'] = $this->portfolioId;
        }
        if ($this->purchaseOrderNumber !== null) {
            $data['purchaseOrderNumber'] = $this->purchaseOrderNumber;
        }
        if ($this->budgets !== []) {
            $data['budgets'] = array_map(
                static fn(Budget $b) => $b->toArray(),
                $this->budgets,
            );
        }
        if ($this->countries !== []) {
            $data['countries'] = $this->countries;
        }

        return $data;
    }
}
