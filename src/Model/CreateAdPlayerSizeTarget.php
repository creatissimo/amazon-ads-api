<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAdPlayerSizeTarget
{
    public function __construct(
        private string $adPlayerSize,
    ) {
    }

    public function getAdPlayerSize(): string
    {
        return $this->adPlayerSize;
    }

    public function setAdPlayerSize(string $adPlayerSize): self
    {
        $this->adPlayerSize = $adPlayerSize;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'adPlayerSize' => $this->adPlayerSize,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adPlayerSize: $data['adPlayerSize'],
        );
    }
}

