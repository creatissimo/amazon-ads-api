<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupMultiStatusSuccess
{
    public function __construct(
        private AdGroup $adGroup,
        private int $index,
    ) {
    }

    public function getAdGroup(): AdGroup
    {
        return $this->adGroup;
    }

    public function setAdGroup(AdGroup $adGroup): self
    {
        $this->adGroup = $adGroup;

        return $this;
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

    public function toArray(): array
    {
        $data = [
            'adGroup' => $this->adGroup->toArray(),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adGroup: AdGroup::fromArray($data['adGroup']),
            index: (int) $data['index'],
        );
    }
}
