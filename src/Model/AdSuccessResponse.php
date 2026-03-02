<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdSuccessResponse
{
    /**
     * @param Ad[] $ads
     */
    public function __construct(
        private array $ads,
        private ?string $nextToken = null,
    ) {
    }

    /** @return Ad[] */
    public function getAds(): array
    {
        return $this->ads;
    }

    /** @param Ad[] $ads */
    public function setAds(array $ads): self
    {
        $this->ads = $ads;

        return $this;
    }

    public function getNextToken(): ?string
    {
        return $this->nextToken;
    }

    public function setNextToken(?string $nextToken): self
    {
        $this->nextToken = $nextToken;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            ads: array_map(
                static fn(array $a) => Ad::fromArray($a),
                $data['ads'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}

