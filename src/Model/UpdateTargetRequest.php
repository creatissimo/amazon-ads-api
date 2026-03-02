<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateTargetRequest
{
    public function __construct(
        private array $targets = [],
    ) {
    }

    /** @return TargetUpdate[] */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /** @param TargetUpdate[] $targets */
    public function setTargets(array $targets): self
    {
        $this->targets = $targets;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->targets !== []) {
            $data['targets'] = array_map(
                static fn(TargetUpdate $v) => $v->toArray(),
                $this->targets,
            );
        }

        return $data;
    }
}
