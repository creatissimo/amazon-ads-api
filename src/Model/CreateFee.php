<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateFee
{
    public function __construct(
        private bool $addToBudgetSpentAmount,
        private FeeType $feeType,
        private float $feeValue,
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
            'feeType' => $this->feeType->value,
            'feeValue' => $this->feeValue,
            'thirdPartyProvider' => $this->thirdPartyProvider->value,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            addToBudgetSpentAmount: (bool) $data['addToBudgetSpentAmount'],
            feeType: FeeType::from($data['feeType']),
            feeValue: (float) $data['feeValue'],
            thirdPartyProvider: FeesThirdPartyProvider::from($data['thirdPartyProvider']),
        );
    }
}
