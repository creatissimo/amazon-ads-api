<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateCreativeBidAdjustment
{
    public function __construct(
        private int $percentage,
        private ?CreativeBidAdjustmentType $creativeType = null,
    ) {
    }

    public function getPercentage(): int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getCreativeType(): ?CreativeBidAdjustmentType
    {
        return $this->creativeType;
    }

    public function setCreativeType(?CreativeBidAdjustmentType $creativeType): self
    {
        $this->creativeType = $creativeType;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'percentage' => $this->percentage,
        ];

        if ($this->creativeType !== null) {
            $data['creativeType'] = $this->creativeType->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            percentage: (int) $data['percentage'],
            creativeType: isset($data['creativeType']) ? CreativeBidAdjustmentType::from($data['creativeType']) : null,
        );
    }
}
