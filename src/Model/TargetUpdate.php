<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetUpdate
{
    public function __construct(
        private string $targetId,
        private ?State $state = null,
        private array $bid = [],
        private array $targetDetails = [],
        private array $marketplaceConfigurations = [],
        private array $tags = [],
    ) {
    }

    public function getTargetId(): string
    {
        return $this->targetId;
    }

    public function setTargetId(string $targetId): self
    {
        $this->targetId = $targetId;

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

    public function getBid(): array
    {
        return $this->bid;
    }

    public function setBid(array $bid): self
    {
        $this->bid = $bid;

        return $this;
    }

    public function getTargetDetails(): array
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(array $targetDetails): self
    {
        $this->targetDetails = $targetDetails;

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
            'targetId' => $this->targetId,
        ];

        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->bid !== []) {
            $data['bid'] = $this->bid;
        }
        if ($this->targetDetails !== []) {
            $data['targetDetails'] = $this->targetDetails;
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

