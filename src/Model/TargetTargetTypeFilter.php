<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetTargetTypeFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return TargetType[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param TargetType[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(TargetType $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => TargetType::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
