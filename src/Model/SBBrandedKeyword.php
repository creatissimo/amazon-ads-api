<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandedKeyword
{
    public function __construct(
        private SBBrandAlternateId $brandAlternateId,
        private string $keyword,
    ) {
    }

    public function getBrandAlternateId(): SBBrandAlternateId
    {
        return $this->brandAlternateId;
    }

    public function setBrandAlternateId(SBBrandAlternateId $brandAlternateId): self
    {
        $this->brandAlternateId = $brandAlternateId;

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

    public function toArray(): array
    {
        return [
            'brandAlternateId' => $this->brandAlternateId->toArray(),
            'keyword' => $this->keyword,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandAlternateId: SBBrandAlternateId::fromArray($data['brandAlternateId']),
            keyword: $data['keyword'],
        );
    }
}

