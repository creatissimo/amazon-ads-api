<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdGroupRequest
{
    public function __construct(
        private array $adGroups = [],
    ) {
    }

    /** @return AdGroupCreate[] */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /** @param AdGroupCreate[] $adGroups */
    public function setAdGroups(array $adGroups): self
    {
        $this->adGroups = $adGroups;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->adGroups !== []) {
            $data['adGroups'] = array_map(
                static fn(AdGroupCreate $v) => $v->toArray(),
                $this->adGroups,
            );
        }

        return $data;
    }
}
