<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductAudienceTarget
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

    public function setAsin(array $asin): self
    {
        $this->asin = $asin;

        return $this;
    }

    public function getEvent(): string
    {
        return $this->event;
    }

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getLookback(): string
    {
        return $this->lookback;
    }

    public function setLookback(string $lookback): self
    {
        $this->lookback = $lookback;

        return $this;
    }

    public function getMatchType(): string
    {
        return $this->matchType;
    }

    public function setMatchType(string $matchType): self
    {
        $this->matchType = $matchType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'asin' => $this->asin,
            'event' => $this->event,
            'lookback' => $this->lookback,
            'matchType' => $this->matchType,
        ];
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

