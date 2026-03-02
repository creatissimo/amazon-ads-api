<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DeleteAdAssociationRequest
{
    public function __construct(
        private array $adAssociationIds = [],
    ) {
    }

    public function getAdAssociationIds(): array
    {
        return $this->adAssociationIds;
    }

    public function setAdAssociationIds(array $adAssociationIds): self
    {
        $this->adAssociationIds = $adAssociationIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->adAssociationIds !== []) {
            $data['adAssociationIds'] = $this->adAssociationIds;
        }

        return $data;
    }
}
