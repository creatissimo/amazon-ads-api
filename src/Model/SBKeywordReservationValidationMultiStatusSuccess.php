<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBKeywordReservationValidationMultiStatusSuccess
{
    public function __construct(
        private int $index,
        private SBKeywordReservationValidation $keywordReservationValidation,
    ) {
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public function getKeywordReservationValidation(): SBKeywordReservationValidation
    {
        return $this->keywordReservationValidation;
    }

    public function setKeywordReservationValidation(SBKeywordReservationValidation $keywordReservationValidation): self
    {
        $this->keywordReservationValidation = $keywordReservationValidation;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'index' => $this->index,
            'keywordReservationValidation' => $this->keywordReservationValidation->toArray(),
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            index: (int) $data['index'],
            keywordReservationValidation: SBKeywordReservationValidation::fromArray($data['keywordReservationValidation']),
        );
    }
}
