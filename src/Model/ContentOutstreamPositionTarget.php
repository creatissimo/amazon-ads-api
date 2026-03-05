<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ContentOutstreamPositionTarget
{
    public function __construct(
        private string $outstreamPosition,
    ) {
    }

    public function getOutstreamPosition(): string
    {
        return $this->outstreamPosition;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            outstreamPosition: $data['outstreamPosition'],
        );
    }
}

