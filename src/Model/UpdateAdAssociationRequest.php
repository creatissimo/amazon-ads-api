<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateAdAssociationRequest
{
    public function __construct(
        private array $adAssociations = [],
    ) {
    }

    /** @return AdAssociationUpdate[] */
    public function getAdAssociations(): array
    {
        return $this->adAssociations;
    }

    /** @param AdAssociationUpdate[] $adAssociations */
    public function setAdAssociations(array $adAssociations): self
    {
        $this->adAssociations = $adAssociations;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->adAssociations !== []) {
            $data['adAssociations'] = array_map(
                static fn(AdAssociationUpdate $v) => $v->toArray(),
                $this->adAssociations,
            );
        }

        return $data;
    }
}
