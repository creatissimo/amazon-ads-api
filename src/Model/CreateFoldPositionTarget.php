<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateFoldPositionTarget
{
    public function __construct(
        private string $foldPosition,
    ) {
    }

    public function getFoldPosition(): string
    {
        return $this->foldPosition;
    }

    public function setFoldPosition(string $foldPosition): self
    {
        $this->foldPosition = $foldPosition;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'foldPosition' => $this->foldPosition,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            foldPosition: $data['foldPosition'],
        );
    }
}

