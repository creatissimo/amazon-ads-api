<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdPlayerSizeTarget
{
    public function __construct(
        private string $adPlayerSize,
    ) {
    }

    public function getAdPlayerSize(): string
    {
        return $this->adPlayerSize;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adPlayerSize: $data['adPlayerSize'],
        );
    }
}

