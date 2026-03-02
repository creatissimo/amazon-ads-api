<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetMultiStatusSuccess
{
    public function __construct(
        private int $index,
        private Target $target,
    ) {
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public function getTarget(): Target
    {
        return $this->target;
    }

    public function setTarget(Target $target): self
    {
        $this->target = $target;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            index: (int) $data['index'],
            target: Target::fromArray($data['target']),
        );
    }
}
