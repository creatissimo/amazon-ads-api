<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdAssociationMultiStatusSuccess
{
    public function __construct(
        private AdAssociation $adAssociation,
        private int $index,
    ) {
    }

    public function getAdAssociation(): AdAssociation
    {
        return $this->adAssociation;
    }

    public function setAdAssociation(AdAssociation $adAssociation): self
    {
        $this->adAssociation = $adAssociation;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adAssociation: AdAssociation::fromArray($data['adAssociation']),
            index: (int) $data['index'],
        );
    }
}
