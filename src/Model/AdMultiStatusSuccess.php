<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdMultiStatusSuccess
{
    public function __construct(
        private Ad $ad,
        private int $index,
    ) {
    }

    public function getAd(): Ad
    {
        return $this->ad;
    }

    public function setAd(Ad $ad): self
    {
        $this->ad = $ad;

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
            'ad' => $this->ad->toArray(),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            ad: Ad::fromArray($data['ad']),
            index: (int) $data['index'],
        );
    }
}
