<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPXPoint
{
    public function __construct(
        private DSPPointLabel $label,
        private float $value,
    ) {
    }

    public function getLabel(): DSPPointLabel
    {
        return $this->label;
    }

    public function setLabel(DSPPointLabel $label): self
    {
        $this->label = $label;

        return $this;
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
        $data = [
            'label' => $this->label->value,
            'value' => $this->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            label: DSPPointLabel::from($data['label']),
            value: (float) $data['value'],
        );
    }
}
