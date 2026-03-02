<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdUpdate
{
    public function __construct(
        private string $adId,
        private ?string $name = null,
        private ?State $state = null,
        private ?array $creative = null,
        private array $marketplaceConfigurations = [],
        private array $tags = [],
    ) {
    }

    public function getAdId(): string
    {
        return $this->adId;
    }

    public function setAdId(string $adId): self
    {
        $this->adId = $adId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCreative(): ?array
    {
        return $this->creative;
    }

    public function setCreative(?array $creative): self
    {
        $this->creative = $creative;

        return $this;
    }

    public function getMarketplaceConfigurations(): array
    {
        return $this->marketplaceConfigurations;
    }

    public function setMarketplaceConfigurations(array $marketplaceConfigurations): self
    {
        $this->marketplaceConfigurations = $marketplaceConfigurations;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adId' => $this->adId,
        ];

        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->creative !== null) {
            $data['creative'] = $this->creative;
        }
        if ($this->marketplaceConfigurations !== []) {
            $data['marketplaceConfigurations'] = $this->marketplaceConfigurations;
        }
        if ($this->tags !== []) {
            $data['tags'] = $this->tags;
        }

        return $data;
    }
}

