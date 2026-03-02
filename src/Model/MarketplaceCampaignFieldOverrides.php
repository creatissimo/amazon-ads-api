<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MarketplaceCampaignFieldOverrides
{
    public function __construct(
        private ?string $endDateTime = null,
        private ?string $name = null,
        private ?CampaignOptimizations $optimizations = null,
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

    public function getOptimizations(): ?CampaignOptimizations
    {
        return $this->optimizations;
    }

    public function setOptimizations(?CampaignOptimizations $optimizations): self
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

    /** @return Tag[] */
    public function getTags(): array
    {
        return $this->tags;
    }

    /** @param Tag[] $tags */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            endDateTime: $data['endDateTime'] ?? null,
            name: $data['name'] ?? null,
            optimizations: isset($data['optimizations']) ? CampaignOptimizations::fromArray($data['optimizations']) : null,
            startDateTime: $data['startDateTime'] ?? null,
            state: isset($data['state']) ? State::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => Tag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
