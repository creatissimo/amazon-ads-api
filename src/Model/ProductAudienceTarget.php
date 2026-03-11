<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductAudienceTarget
{
    public function __construct(
        private array $asin,
        private string $event,
        private string $lookback,
        private string $matchType,
    ) {
    }

    public function getAsin(): array
    {
        return $this->asin;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function getLookback(): string
    {
        return $this->lookback;
    }

    public function getMatchType(): string
    {
        return $this->matchType;
    }

    public function toArray(): array
    {
        $data = [
            'asin' => $this->asin,
            'event' => $this->event,
            'lookback' => $this->lookback,
            'matchType' => $this->matchType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            asin: $data['asin'],
            event: $data['event'],
            lookback: $data['lookback'],
            matchType: $data['matchType'],
        );
    }
}

