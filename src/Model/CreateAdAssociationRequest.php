<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdAssociationRequest
{
    public function __construct(
        private array $adAssociations = [],
    ) {
    }

    /** @return AdAssociationCreate[] */
    public function getAdAssociations(): array
    {
        return $this->adAssociations;
    }

    /** @param AdAssociationCreate[] $adAssociations */
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
                static fn(AdAssociationCreate $v) => $v->toArray(),
                $this->adAssociations,
            );
        }

        return $data;
    }
}
