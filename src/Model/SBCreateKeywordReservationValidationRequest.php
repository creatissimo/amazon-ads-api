<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateKeywordReservationValidationRequest
{
    public function __construct(
        private array $keywordReservationValidations = [],
    ) {
    }

    /** @return SBKeywordReservationValidationCreate[] */
    public function getKeywordReservationValidations(): array
    {
        return $this->keywordReservationValidations;
    }

    /** @param SBKeywordReservationValidationCreate[] $keywordReservationValidations */
    public function setKeywordReservationValidations(array $keywordReservationValidations): self
    {
        $this->keywordReservationValidations = $keywordReservationValidations;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->keywordReservationValidations !== []) {
            $data['keywordReservationValidations'] = array_map(
                static fn(SBKeywordReservationValidationCreate $v) => $v->toArray(),
                $this->keywordReservationValidations,
            );
        }

        return $data;
    }
}
