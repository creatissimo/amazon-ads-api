<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdAssociationSuccessResponse
{
    /**
     * @param AdAssociation[] $adAssociations
     */
    public function __construct(
        private array $adAssociations,
        private ?string $nextToken = null,
    ) {
    }

    /** @return AdAssociation[] */
    public function getAdAssociations(): array
    {
        return $this->adAssociations;
    }

    /** @param AdAssociation[] $adAssociations */
    public function setAdAssociations(array $adAssociations): self
    {
        $this->adAssociations = $adAssociations;

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

    public static function fromArray(array $data): self
    {
        return new self(
            adAssociations: array_map(
                static fn(array $a) => AdAssociation::fromArray($a),
                $data['adAssociations'] ?? [],
            ),
            nextToken: $data['nextToken'] ?? null,
        );
    }
}

