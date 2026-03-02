<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DeleteTargetRequest
{
    public function __construct(
        private array $targetIds = [],
    ) {
    }

    public function getTargetIds(): array
    {
        return $this->targetIds;
    }

    public function setTargetIds(array $targetIds): self
    {
        $this->targetIds = $targetIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->targetIds !== []) {
            $data['targetIds'] = $this->targetIds;
        }

        return $data;
    }
}
