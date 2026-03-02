<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateTargetRequest
{
    public function __construct(
        private array $targets = [],
    ) {
    }

    /** @return TargetCreate[] */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /** @param TargetCreate[] $targets */
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
                static fn(TargetCreate $v) => $v->toArray(),
                $this->targets,
            );
        }

        return $data;
    }
}
