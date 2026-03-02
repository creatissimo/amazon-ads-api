<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class MarketplaceAdGroupFieldOverrides
{
    public function __construct(
        private ?string $name = null,
        private ?State $state = null,
        private array $tags = [],
    ) {
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
            name: $data['name'] ?? null,
            state: isset($data['state']) ? State::from($data['state']) : null,
            tags: array_map(
                static fn(array $v) => Tag::fromArray($v),
                $data['tags'] ?? [],
            ),
        );
    }
}
