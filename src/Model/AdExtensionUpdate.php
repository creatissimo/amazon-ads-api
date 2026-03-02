<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionUpdate
{
    public function __construct(
        private string $adExtensionId,
        private ?UpdateState $state = null,
        private array $marketplaces = [],
    ) {
    }

    public function getAdExtensionId(): string
    {
        return $this->adExtensionId;
    }

    public function setAdExtensionId(string $adExtensionId): self
    {
        $this->adExtensionId = $adExtensionId;

        return $this;
    }

    public function getState(): ?UpdateState
    {
        return $this->state;
    }

    public function setState(?UpdateState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    public function setMarketplaces(array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adExtensionId' => $this->adExtensionId,
        ];

        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->marketplaces !== []) {
            $data['marketplaces'] = $this->marketplaces;
        }

        return $data;
    }
}

