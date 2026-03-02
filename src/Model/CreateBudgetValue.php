<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateBudgetValue
{
    public function __construct(
        private CreateMonetaryBudgetValue $monetaryBudgetValue,
    ) {
    }

    public function getMonetaryBudgetValue(): CreateMonetaryBudgetValue
    {
        return $this->monetaryBudgetValue;
    }

    public function setMonetaryBudgetValue(CreateMonetaryBudgetValue $monetaryBudgetValue): self
    {
        $this->monetaryBudgetValue = $monetaryBudgetValue;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'monetaryBudgetValue' => $this->monetaryBudgetValue->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            monetaryBudgetValue: CreateMonetaryBudgetValue::fromArray($data['monetaryBudgetValue']),
        );
    }
}

