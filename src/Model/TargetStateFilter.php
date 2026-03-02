<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetStateFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return State[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param State[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(State $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => State::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
