<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class FoldPositionTarget
{
    public function __construct(
        private string $foldPosition,
    ) {
    }

    public function getFoldPosition(): string
    {
        return $this->foldPosition;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            foldPosition: $data['foldPosition'],
        );
    }
}

