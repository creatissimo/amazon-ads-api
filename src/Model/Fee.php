<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Fee
{
    public function __construct(
        private bool $addToBudgetSpentAmount,
        private CurrencyCode $currencyCode,
        private FeeType $feeType,
        private float $feeValue,
        private FeeValueType $feeValueType,
        private FeesThirdPartyProvider $thirdPartyProvider,
    ) {
    }

    public function getAddToBudgetSpentAmount(): bool
    {
        return $this->addToBudgetSpentAmount;
    }

    public function setAddToBudgetSpentAmount(bool $addToBudgetSpentAmount): self
    {
        $this->addToBudgetSpentAmount = $addToBudgetSpentAmount;

        return $this;
    }

    public function getCurrencyCode(): CurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(CurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getFeeType(): FeeType
    {
        return $this->feeType;
    }

    public function setFeeType(FeeType $feeType): self
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

    public function getFeeValueType(): FeeValueType
    {
        return $this->feeValueType;
    }

    public function setFeeValueType(FeeValueType $feeValueType): self
    {
        $this->feeValueType = $feeValueType;

        return $this;
    }

    public function getThirdPartyProvider(): FeesThirdPartyProvider
    {
        return $this->thirdPartyProvider;
    }

    public function setThirdPartyProvider(FeesThirdPartyProvider $thirdPartyProvider): self
    {
        $this->thirdPartyProvider = $thirdPartyProvider;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'addToBudgetSpentAmount' => $this->addToBudgetSpentAmount,
            'currencyCode' => $this->currencyCode->value,
            'feeType' => $this->feeType->value,
            'feeValue' => $this->feeValue,
            'feeValueType' => $this->feeValueType->value,
            'thirdPartyProvider' => $this->thirdPartyProvider->value,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            addToBudgetSpentAmount: (bool) $data['addToBudgetSpentAmount'],
            currencyCode: CurrencyCode::from($data['currencyCode']),
            feeType: FeeType::from($data['feeType']),
            feeValue: (float) $data['feeValue'],
            feeValueType: FeeValueType::from($data['feeValueType']),
            thirdPartyProvider: FeesThirdPartyProvider::from($data['thirdPartyProvider']),
        );
    }
}
