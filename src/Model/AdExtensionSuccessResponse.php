<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionSuccessResponse
{
    /**
     * @param AdExtension[] $adExtensions
     */
    public function __construct(
        private array $adExtensions,
        private ?string $nextToken = null,
    ) {
    }

    /** @return AdExtension[] */
    public function getAdExtensions(): array
    {
        return $this->adExtensions;
    }

    /** @param AdExtension[] $adExtensions */
    public function setAdExtensions(array $adExtensions): self
    {
        $this->adExtensions = $adExtensions;

        return $this;
    }

    public function getNextToken(): ?string
    {
        return $this->nextToken;
    }

    public function setNextToken(?string $nextToken): self
    {
        $this->nextToken = $nextToken;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adExtensions' => array_map(
                static fn(AdExtension $v) => $v->toArray(),
                $this->adExtensions,
            ),
        ];

        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adExtensions: array_map(
                static fn(array $a) => AdExtension::fromArray($a),
                $data['adExtensions'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}

