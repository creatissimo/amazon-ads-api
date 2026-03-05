<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ContentInstreamPositionTarget
{
    public function __construct(
        private string $instreamPosition,
    ) {
    }

    public function getInstreamPosition(): string
    {
        return $this->instreamPosition;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            instreamPosition: $data['instreamPosition'],
        );
    }
}

