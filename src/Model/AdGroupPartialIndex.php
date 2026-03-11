<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupPartialIndex
{
    public function __construct(
        private AdGroup $adGroup,
        private array $errors,
        private int $index,
    ) {
    }

    public function getAdGroup(): AdGroup
    {
        return $this->adGroup;
    }

    public function setAdGroup(AdGroup $adGroup): self
    {
        $this->adGroup = $adGroup;

        return $this;
    }

    /** @return Error[] */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /** @param Error[] $errors */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;

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

    public function toArray(): array
    {
        $data = [
            'adGroup' => $this->adGroup->toArray(),
            'errors' => array_map(
                static fn(Error $v) => $v->toArray(),
                $this->errors,
            ),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adGroup: AdGroup::fromArray($data['adGroup']),
            errors: array_map(
                static fn(array $v) => Error::fromArray($v),
                $data['errors'] ?? [],
            ),
            index: (int) $data['index'],
        );
    }
}
