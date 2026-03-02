<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateAdGroupRequest
{
    public function __construct(
        private array $adGroups = [],
    ) {
    }

    /** @return AdGroupUpdate[] */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /** @param AdGroupUpdate[] $adGroups */
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
                static fn(AdGroupUpdate $v) => $v->toArray(),
                $this->adGroups,
            );
        }

        return $data;
    }
}
