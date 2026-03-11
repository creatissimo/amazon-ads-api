<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealSuccessResponse
{
    public function __construct(
        private array $advertisingDeals = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return SBAdvertisingDeal[] */
    public function getAdvertisingDeals(): array
    {
        return $this->advertisingDeals;
    }

    /** @param SBAdvertisingDeal[] $advertisingDeals */
    public function setAdvertisingDeals(array $advertisingDeals): self
    {
        $this->advertisingDeals = $advertisingDeals;

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

    public function toArray(): array
    {
        $data = [];

        if ($this->advertisingDeals !== []) {
            $data['advertisingDeals'] = array_map(
                static fn(SBAdvertisingDeal $v) => $v->toArray(),
                $this->advertisingDeals,
            );
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisingDeals: array_map(
                static fn(array $v) => SBAdvertisingDeal::fromArray($v),
                $data['advertisingDeals'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
