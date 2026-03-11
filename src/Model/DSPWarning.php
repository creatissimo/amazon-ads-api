<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPWarning
{
    public function __construct(
        private string $code,
        private string $message,
        private array $adGroupIds = [],
        private array $messageParameters = [],
        private ?int $warningLevel = null,
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

    public function getAdGroupIds(): array
    {
        return $this->adGroupIds;
    }

    public function setAdGroupIds(array $adGroupIds): self
    {
        $this->adGroupIds = $adGroupIds;

        return $this;
    }

    public function getMessageParameters(): array
    {
        return $this->messageParameters;
    }

    public function setMessageParameters(array $messageParameters): self
    {
        $this->messageParameters = $messageParameters;

        return $this;
    }

    public function getWarningLevel(): ?int
    {
        return $this->warningLevel;
    }

    public function setWarningLevel(?int $warningLevel): self
    {
        $this->warningLevel = $warningLevel;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'code' => $this->code,
            'message' => $this->message,
        ];

        if ($this->adGroupIds !== []) {
            $data['adGroupIds'] = $this->adGroupIds;
        }
        if ($this->messageParameters !== []) {
            $data['messageParameters'] = $this->messageParameters;
        }
        if ($this->warningLevel !== null) {
            $data['warningLevel'] = $this->warningLevel;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code: $data['code'],
            message: $data['message'],
            adGroupIds: $data['adGroupIds'] ?? [],
            messageParameters: $data['messageParameters'] ?? [],
            warningLevel: isset($data['warningLevel']) ? (int) $data['warningLevel'] : null,
        );
    }
}
