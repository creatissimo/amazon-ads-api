<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBKeywordReservationValidationCreate
{
    public function __construct(
        private string $keyword,
    ) {
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

    public function toArray(): array
    {
        $data = [
            'keyword' => $this->keyword,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            keyword: $data['keyword'],
        );
    }
}
