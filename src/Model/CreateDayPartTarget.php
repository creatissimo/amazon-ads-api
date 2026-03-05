<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateDayPartTarget
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

    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    public function getTimeOfDay(): array
    {
        return $this->timeOfDay;
    }

    public function setTimeOfDay(array $timeOfDay): self
    {
        $this->timeOfDay = $timeOfDay;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'dayOfWeek' => $this->dayOfWeek,
            'timeOfDay' => $this->timeOfDay,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            dayOfWeek: $data['dayOfWeek'],
            timeOfDay: $data['timeOfDay'],
        );
    }
}

