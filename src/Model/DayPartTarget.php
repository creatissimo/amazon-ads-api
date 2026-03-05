<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DayPartTarget
{
    public function __construct(
        private string $dayOfWeek,
        private array $timeOfDay,
    ) {
    }

    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    public function getTimeOfDay(): array
    {
        return $this->timeOfDay;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            dayOfWeek: $data['dayOfWeek'],
            timeOfDay: $data['timeOfDay'],
        );
    }
}

