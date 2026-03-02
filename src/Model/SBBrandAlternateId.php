<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandAlternateId
{
    public function __construct(
        private string $alternateBrandId,
        private SBAlternateBrandIdType $alternateBrandIdType,
    ) {
    }

    public function getAlternateBrandId(): string
    {
        return $this->alternateBrandId;
    }

    public function setAlternateBrandId(string $alternateBrandId): self
    {
        $this->alternateBrandId = $alternateBrandId;

        return $this;
    }

    public function getAlternateBrandIdType(): SBAlternateBrandIdType
    {
        return $this->alternateBrandIdType;
    }

    public function setAlternateBrandIdType(SBAlternateBrandIdType $alternateBrandIdType): self
    {
        $this->alternateBrandIdType = $alternateBrandIdType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'alternateBrandId' => $this->alternateBrandId,
            'alternateBrandIdType' => $this->alternateBrandIdType->value,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            alternateBrandId: $data['alternateBrandId'],
            alternateBrandIdType: SBAlternateBrandIdType::from($data['alternateBrandIdType']),
        );
    }
}

