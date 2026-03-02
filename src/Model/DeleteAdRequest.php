<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DeleteAdRequest
{
    public function __construct(
        private array $adIds = [],
    ) {
    }

    public function getAdIds(): array
    {
        return $this->adIds;
    }

    public function setAdIds(array $adIds): self
    {
        $this->adIds = $adIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->adIds !== []) {
            $data['adIds'] = $this->adIds;
        }

        return $data;
    }
}
