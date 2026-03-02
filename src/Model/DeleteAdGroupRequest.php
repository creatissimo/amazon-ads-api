<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DeleteAdGroupRequest
{
    public function __construct(
        private array $adGroupIds = [],
    ) {
    }

    public function getAdGroupIds(): array
    {
        return $this->adGroupIds;
    }

    public function setAdGroupIds(array $adGroupIds): self
    {
        $this->adGroupIds = $adGroupIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->adGroupIds !== []) {
            $data['adGroupIds'] = $this->adGroupIds;
        }

        return $data;
    }
}
