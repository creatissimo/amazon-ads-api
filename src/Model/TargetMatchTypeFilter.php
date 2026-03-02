<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetMatchTypeFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return MatchType[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param MatchType[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(MatchType $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => MatchType::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
