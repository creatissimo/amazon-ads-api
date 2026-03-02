<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateTag
{
    public function __construct(
        private string $key,
        private string $value,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'key' => $this->key,
            'value' => $this->value,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            key: $data['key'],
            value: $data['value'],
        );
    }
}
