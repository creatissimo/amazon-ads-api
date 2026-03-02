<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdRequest
{
    public function __construct(
        private array $ads = [],
    ) {
    }

    /** @return AdCreate[] */
    public function getAds(): array
    {
        return $this->ads;
    }

    /** @param AdCreate[] $ads */
    public function setAds(array $ads): self
    {
        $this->ads = $ads;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->ads !== []) {
            $data['ads'] = array_map(
                static fn(AdCreate $v) => $v->toArray(),
                $this->ads,
            );
        }

        return $data;
    }
}
