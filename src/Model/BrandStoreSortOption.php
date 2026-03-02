<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class BrandStoreSortOption
{
    public function __construct(
        private BrandStoreSortOptionsFields $by,
        private ?SortDirection $direction = null,
    ) {
    }

    public function getBy(): BrandStoreSortOptionsFields
    {
        return $this->by;
    }

    public function setBy(BrandStoreSortOptionsFields $by): self
    {
        $this->by = $by;

        return $this;
    }

    public function getDirection(): ?SortDirection
    {
        return $this->direction;
    }

    public function setDirection(?SortDirection $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'by' => $this->by->value,
        ];

        if ($this->direction !== null) {
            $data['direction'] = $this->direction->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            by: BrandStoreSortOptionsFields::from($data['by']),
            direction: isset($data['direction']) ? SortDirection::from($data['direction']) : null,
        );
    }
}
