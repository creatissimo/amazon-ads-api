<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMarketplaceCampaignFieldOverrides
{
    public function __construct(
        private ?string $endDateTime = null,
        private ?string $name = null,
        private ?CreateCampaignOptimizations $optimizations = null,
        private ?string $startDateTime = null,
        private ?State $state = null,
        private array $tags = [],
    ) {
    }

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;

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

    public function getOptimizations(): ?CreateCampaignOptimizations
    {
        return $this->optimizations;
    }

    public function setOptimizations(?CreateCampaignOptimizations $optimizations): self
    {
        $this->optimizations = $optimizations;

        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;

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

    /** @return CreateTag[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    /** @param CreateTag[] $tags */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->endDateTime !== null) {
            $data['endDateTime'] = $this->endDateTime;
        }
        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->optimizations !== null) {
            $data['optimizations'] = $this->optimizations->toArray();
        }
        if ($this->startDateTime !== null) {
            $data['startDateTime'] = $this->startDateTime;
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->tags !== []) {
            $data['tags'] = array_map(
                static fn(CreateTag $v) => $v->toArray(),
                $this->tags,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            endDateTime: $data['endDateTime'] ?? null,
            name: $data['name'] ?? null,
            optimizations: isset($data['optimizations']) ? CreateCampaignOptimizations::fromArray($data['optimizations']) : null,
            startDateTime: $data['startDateTime'] ?? null,
            state: isset($data['state']) ? State::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
