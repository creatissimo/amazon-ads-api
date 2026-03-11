<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupSuccessResponse
{
    /**
     * @param AdGroup[] $adGroups
     */
    public function __construct(
        private array $adGroups,
        private ?string $nextToken = null,
    ) {
    }

    /** @return AdGroup[] */
    public function getAdGroups(): array
    {
        return $this->adGroups;
    }

    /** @param AdGroup[] $adGroups */
    public function setAdGroups(array $adGroups): self
    {
        $this->adGroups = $adGroups;

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
            'adGroups' => array_map(
                static fn(AdGroup $v) => $v->toArray(),
                $this->adGroups,
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
            adGroups: array_map(
                static fn(array $a) => AdGroup::fromArray($a),
                $data['adGroups'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}

