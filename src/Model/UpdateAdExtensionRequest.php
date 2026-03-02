<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateAdExtensionRequest
{
    public function __construct(
        private array $adExtensions = [],
    ) {
    }

    /** @return AdExtensionUpdate[] */
    public function getAdExtensions(): array
    {
        return $this->adExtensions;
    }

    /** @param AdExtensionUpdate[] $adExtensions */
    public function setAdExtensions(array $adExtensions): self
    {
        $this->adExtensions = $adExtensions;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->adExtensions !== []) {
            $data['adExtensions'] = array_map(
                static fn(AdExtensionUpdate $v) => $v->toArray(),
                $this->adExtensions,
            );
        }

        return $data;
    }
}
