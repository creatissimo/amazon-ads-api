<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionUpdate
{
    public function __construct(
        private string $adExtensionId,
        private array $marketplaces = [],
        private ?UpdateState $state = null,
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

    /** @return Marketplace[] */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }

    /** @param Marketplace[] $marketplaces */
    public function setMarketplaces(array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

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

    public function toArray(): array
    {
        $data = [
            'adExtensionId' => $this->adExtensionId,
        ];

        if ($this->marketplaces !== []) {
            $data['marketplaces'] = array_map(
                static fn(Marketplace $v) => $v->value,
                $this->marketplaces,
            );
        }
        if ($this->state !== null) {
            $data['state'] = $this->state->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adExtensionId: $data['adExtensionId'],
            marketplaces: array_map(
                static fn(string $v) => Marketplace::from($v),
                $data['marketplaces'] ?? [],
            ),
            state: isset($data['state']) ? UpdateState::from($data['state']) : null,
        );
    }
}
