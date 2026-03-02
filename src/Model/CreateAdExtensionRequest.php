<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdExtensionRequest
{
    public function __construct(
        private array $adExtensions = [],
    ) {
    }

    /** @return AdExtensionCreate[] */
    public function getAdExtensions(): array
    {
        return $this->adExtensions;
    }

    /** @param AdExtensionCreate[] $adExtensions */
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
                static fn(AdExtensionCreate $v) => $v->toArray(),
                $this->adExtensions,
            );
        }

        return $data;
    }
}
