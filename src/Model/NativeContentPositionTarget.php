<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class NativeContentPositionTarget
{
    public function __construct(
        private string $nativePosition,
    ) {
    }

    public function getNativePosition(): string
    {
        return $this->nativePosition;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            nativePosition: $data['nativePosition'],
        );
    }
}

