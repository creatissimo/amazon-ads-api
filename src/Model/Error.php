<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Error
{
    public function __construct(
        private string $code,
        private string $message,
        private ?string $fieldLocation = null,
    ) {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getFieldLocation(): ?string
    {
        return $this->fieldLocation;
    }

    public function setFieldLocation(?string $fieldLocation): self
    {
        $this->fieldLocation = $fieldLocation;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code: $data['code'] ?? '',
            message: $data['message'] ?? '',
            fieldLocation: $data['fieldLocation'] ?? null,
        );
    }
}
