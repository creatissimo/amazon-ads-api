<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetSuccessResponse
{
    /**
     * @param Target[] $targets
     */
    public function __construct(
        private array $targets,
        private ?string $nextToken = null,
        private ?int $totalResults = null,
    ) {
    }

    /** @return Target[] */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /** @param Target[] $targets */
    public function setTargets(array $targets): self
    {
        $this->targets = $targets;

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

    public function getTotalResults(): ?int
    {
        return $this->totalResults;
    }

    public function setTotalResults(?int $totalResults): self
    {
        $this->totalResults = $totalResults;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            targets: array_map(
                static fn(array $t) => Target::fromArray($t),
                $data['targets'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
            totalResults: isset($data['totalResults']) ? (int) $data['totalResults'] : null,
        );
    }
}

