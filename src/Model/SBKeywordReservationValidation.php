<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBKeywordReservationValidation
{
    public function __construct(
        private bool $isReservable,
        private string $keyword,
        private string $keywordReservationValidationId,
        private ?string $reservationRejectedReason = null,
    ) {
    }

    public function getIsReservable(): bool
    {
        return $this->isReservable;
    }

    public function setIsReservable(bool $isReservable): self
    {
        $this->isReservable = $isReservable;

        return $this;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getKeywordReservationValidationId(): string
    {
        return $this->keywordReservationValidationId;
    }

    public function setKeywordReservationValidationId(string $keywordReservationValidationId): self
    {
        $this->keywordReservationValidationId = $keywordReservationValidationId;

        return $this;
    }

    public function getReservationRejectedReason(): ?string
    {
        return $this->reservationRejectedReason;
    }

    public function setReservationRejectedReason(?string $reservationRejectedReason): self
    {
        $this->reservationRejectedReason = $reservationRejectedReason;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'isReservable' => $this->isReservable,
            'keyword' => $this->keyword,
            'keywordReservationValidationId' => $this->keywordReservationValidationId,
        ];

        if ($this->reservationRejectedReason !== null) {
            $data['reservationRejectedReason'] = $this->reservationRejectedReason;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            isReservable: (bool) $data['isReservable'],
            keyword: $data['keyword'],
            keywordReservationValidationId: $data['keywordReservationValidationId'],
            reservationRejectedReason: $data['reservationRejectedReason'] ?? null,
        );
    }
}
