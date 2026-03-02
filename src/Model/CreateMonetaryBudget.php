<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMonetaryBudget
{
    public function __construct(
        private float $value,
    ) {
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'value' => $this->value,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            value: (float) $data['value'],
        );
    }
}

