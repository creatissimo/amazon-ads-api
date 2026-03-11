<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionMultiStatusSuccess
{
    public function __construct(
        private AdExtension $adExtension,
        private int $index,
    ) {
    }

    public function getAdExtension(): AdExtension
    {
        return $this->adExtension;
    }

    public function setAdExtension(AdExtension $adExtension): self
    {
        $this->adExtension = $adExtension;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'adExtension' => $this->adExtension->toArray(),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            adExtension: AdExtension::fromArray($data['adExtension']),
            index: (int) $data['index'],
        );
    }
}
