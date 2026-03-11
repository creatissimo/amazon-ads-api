<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignFee
{
    public function __construct(
        private CampaignFeeType $feeType,
        private float $feeValue,
        private CampaignFeeValueType $feeValueType,
    ) {
    }

    public function getFeeType(): CampaignFeeType
    {
        return $this->feeType;
    }

    public function setFeeType(CampaignFeeType $feeType): self
    {
        $this->feeType = $feeType;

        return $this;
    }

    public function getFeeValue(): float
    {
        return $this->feeValue;
    }

    public function setFeeValue(float $feeValue): self
    {
        $this->feeValue = $feeValue;

        return $this;
    }

    public function getFeeValueType(): CampaignFeeValueType
    {
        return $this->feeValueType;
    }

    public function setFeeValueType(CampaignFeeValueType $feeValueType): self
    {
        $this->feeValueType = $feeValueType;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'feeType' => $this->feeType->value,
            'feeValue' => $this->feeValue,
            'feeValueType' => $this->feeValueType->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            feeType: CampaignFeeType::from($data['feeType']),
            feeValue: (float) $data['feeValue'],
            feeValueType: CampaignFeeValueType::from($data['feeValueType']),
        );
    }
}
