<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateContentOutstreamPositionTarget
{
    public function __construct(
        private string $outstreamPosition,
    ) {
    }

    public function getOutstreamPosition(): string
    {
        return $this->outstreamPosition;
    }

    public function setOutstreamPosition(string $outstreamPosition): self
    {
        $this->outstreamPosition = $outstreamPosition;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'outstreamPosition' => $this->outstreamPosition,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            outstreamPosition: $data['outstreamPosition'],
        );
    }
}

