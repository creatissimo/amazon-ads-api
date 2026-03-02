<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateMarketplaceTargetFieldOverrides
{
    public function __construct(
        private ?State $state = null,
        private array $tags = [],
        private mixed $targetDetails = null,
    ) {
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

    public function getTargetDetails(): mixed
    {
        return $this->targetDetails;
    }

    public function setTargetDetails(mixed $targetDetails): self
    {
        $this->targetDetails = $targetDetails;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }
        if ($this->tags !== []) {
            $data['tags'] = array_map(
                static fn(CreateTag $v) => $v->toArray(),
                $this->tags,
            );
        }
        if ($this->targetDetails !== null) {
            $data['targetDetails'] = $this->targetDetails;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            state: isset($data['state']) ? State::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => CreateTag::fromArray($v),
                $data['tags'] ?? [],
            ),
            targetDetails: $data['targetDetails'] ?? null,
        );
    }
}
