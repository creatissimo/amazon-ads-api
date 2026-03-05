<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateContentInstreamPositionTarget
{
    public function __construct(
        private string $instreamPosition,
    ) {
    }

    public function getInstreamPosition(): string
    {
        return $this->instreamPosition;
    }

    public function setInstreamPosition(string $instreamPosition): self
    {
        $this->instreamPosition = $instreamPosition;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'instreamPosition' => $this->instreamPosition,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            instreamPosition: $data['instreamPosition'],
        );
    }
}

