<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionPartialIndex
{
    public function __construct(
        private AdExtension $adExtension,
        private array $errors,
        private int $index,
    ) {
    }

    public function getAdExtension(): AdExtension
    {
        return $this->adExtension;
    }

    public function setAdExtension(AdExtension $adExtension): self
    {
        $this->adExtension = $adExtension;

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

    public static function fromArray(array $data): self
    {
        return new self(
            adExtension: AdExtension::fromArray($data['adExtension']),
            errors: array_map(
                static fn(array $v) => Error::fromArray($v),
                $data['errors'] ?? [],
            ),
            index: (int) $data['index'],
        );
    }
}
