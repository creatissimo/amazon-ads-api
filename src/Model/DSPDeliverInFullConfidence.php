<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPDeliverInFullConfidence
{
    public function __construct(
        private DSPDeliverInFullConfidenceLevel $value,
    ) {
    }

    public function getValue(): DSPDeliverInFullConfidenceLevel
    {
        return $this->value;
    }

    public function setValue(DSPDeliverInFullConfidenceLevel $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'value' => $this->value->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            value: DSPDeliverInFullConfidenceLevel::from($data['value']),
        );
    }
}
