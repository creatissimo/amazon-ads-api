<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBCreateBrandedKeywordRecommendationTypeDetails
{
    /**
     * @param SBCreateBrandAlternateId[] $brandAlternateId
     */
    public function __construct(
        private array $brandAlternateId,
    ) {
    }

    /** @return SBCreateBrandAlternateId[] */
    public function getBrandAlternateId(): array
    {
        return $this->brandAlternateId;
    }

    /** @param SBCreateBrandAlternateId[] $brandAlternateId */
    public function setBrandAlternateId(array $brandAlternateId): self
    {
        $this->brandAlternateId = $brandAlternateId;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'brandAlternateId' => array_map(
                static fn(SBCreateBrandAlternateId $v) => $v->toArray(),
                $this->brandAlternateId,
            ),
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            brandAlternateId: array_map(
                static fn(array $v) => SBCreateBrandAlternateId::fromArray($v),
                $data['brandAlternateId'] ?? [],
            ),
        );
    }
}

