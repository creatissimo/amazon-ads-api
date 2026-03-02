<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetPartialIndex
{
    public function __construct(
        private array $errors,
        private int $index,
        private Target $target,
    ) {
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

    public function getTarget(): Target
    {
        return $this->target;
    }

    public function setTarget(Target $target): self
    {
        $this->target = $target;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errors: array_map(
                static fn(array $v) => Error::fromArray($v),
                $data['errors'] ?? [],
            ),
            index: (int) $data['index'],
            target: Target::fromArray($data['target']),
        );
    }
}
