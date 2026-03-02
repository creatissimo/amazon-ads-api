<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBBrandedKeywordRecommendationTypeDetails
{
    /**
     * @param SBBrandAlternateId[] $brandAlternateId
     */
    public function __construct(
        private array $brandAlternateId,
    ) {
    }

    /** @return SBBrandAlternateId[] */
    public function getBrandAlternateId(): array
    {
        return $this->brandAlternateId;
    }

    /** @param SBBrandAlternateId[] $brandAlternateId */
    public function setBrandAlternateId(array $brandAlternateId): self
    {
        $this->brandAlternateId = $brandAlternateId;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandAlternateId' => array_map(
                static fn(SBBrandAlternateId $v) => $v->toArray(),
                $this->brandAlternateId,
            ),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandAlternateId: array_map(
                static fn(array $v) => SBBrandAlternateId::fromArray($v),
                $data['brandAlternateId'] ?? [],
            ),
        );
    }
}

