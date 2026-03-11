<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCommitmentSuccessResponse
{
    public function __construct(
        private array $commitments = [],
        private ?string $nextToken = null,
    ) {
    }

    /** @return DSPCommitment[] */
    public function getCommitments(): array
    {
        return $this->commitments;
    }

    /** @param DSPCommitment[] $commitments */
    public function setCommitments(array $commitments): self
    {
        $this->commitments = $commitments;

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
        $data = [];

        if ($this->commitments !== []) {
            $data['commitments'] = array_map(
                static fn(DSPCommitment $v) => $v->toArray(),
                $this->commitments,
            );
        }
        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            commitments: array_map(
                static fn(array $v) => DSPCommitment::fromArray($v),
                $data['commitments'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
