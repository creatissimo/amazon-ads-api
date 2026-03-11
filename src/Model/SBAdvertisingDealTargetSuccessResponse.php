<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealTargetSuccessResponse
{
    public function __construct(
        private array $advertisingDealTargets = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return SBAdvertisingDealTarget[] */
    public function getAdvertisingDealTargets(): array
    {
        return $this->advertisingDealTargets;
    }

    /** @param SBAdvertisingDealTarget[] $advertisingDealTargets */
    public function setAdvertisingDealTargets(array $advertisingDealTargets): self
    {
        $this->advertisingDealTargets = $advertisingDealTargets;

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

        if ($this->advertisingDealTargets !== []) {
            $data['advertisingDealTargets'] = array_map(
                static fn(SBAdvertisingDealTarget $v) => $v->toArray(),
                $this->advertisingDealTargets,
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
            advertisingDealTargets: array_map(
                static fn(array $v) => SBAdvertisingDealTarget::fromArray($v),
                $data['advertisingDealTargets'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
