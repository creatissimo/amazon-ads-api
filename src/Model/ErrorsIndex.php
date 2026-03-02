<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ErrorsIndex
{
    /**
     * @param Error[] $errors
     */
    public function __construct(
        private array $errors,
        private int $index,
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

    public static function fromArray(array $data): self
    {
        return new self(
            errors: array_map(
                static fn(array $e) => Error::fromArray($e),
                $data['errors'] ?? [],
            ),
            index: $data['index'],
        );
    }
}
