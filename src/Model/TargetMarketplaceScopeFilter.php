<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetMarketplaceScopeFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return MarketplaceScope[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param MarketplaceScope[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(MarketplaceScope $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => MarketplaceScope::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
