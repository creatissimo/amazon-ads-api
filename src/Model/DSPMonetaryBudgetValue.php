<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPMonetaryBudgetValue
{
    public function __construct(
        private ?DSPMonetaryBudget $monetaryBudget = null,
    ) {
    }

    public function getMonetaryBudget(): ?DSPMonetaryBudget
    {
        return $this->monetaryBudget;
    }

    public function setMonetaryBudget(?DSPMonetaryBudget $monetaryBudget): self
    {
        $this->monetaryBudget = $monetaryBudget;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->monetaryBudget !== null) {
            $data['monetaryBudget'] = $this->monetaryBudget->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            monetaryBudget: isset($data['monetaryBudget']) ? DSPMonetaryBudget::fromArray($data['monetaryBudget']) : null,
        );
    }
}

