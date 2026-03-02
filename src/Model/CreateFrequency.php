<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateFrequency
{
    public function __construct(
        private int $eventMaxCount,
        private FrequencyTargetingSetting $frequencyTargetingSetting,
        private int $timeCount,
        private TimeUnit $timeUnit,
    ) {
    }

    public function getEventMaxCount(): int
    {
        return $this->eventMaxCount;
    }

    public function setEventMaxCount(int $eventMaxCount): self
    {
        $this->eventMaxCount = $eventMaxCount;

        return $this;
    }

    public function getFrequencyTargetingSetting(): FrequencyTargetingSetting
    {
        return $this->frequencyTargetingSetting;
    }

    public function setFrequencyTargetingSetting(FrequencyTargetingSetting $frequencyTargetingSetting): self
    {
        $this->frequencyTargetingSetting = $frequencyTargetingSetting;

        return $this;
    }

    public function getTimeCount(): int
    {
        return $this->timeCount;
    }

    public function setTimeCount(int $timeCount): self
    {
        $this->timeCount = $timeCount;

        return $this;
    }

    public function getTimeUnit(): TimeUnit
    {
        return $this->timeUnit;
    }

    public function setTimeUnit(TimeUnit $timeUnit): self
    {
        $this->timeUnit = $timeUnit;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'eventMaxCount' => $this->eventMaxCount,
            'frequencyTargetingSetting' => $this->frequencyTargetingSetting->value,
            'timeCount' => $this->timeCount,
            'timeUnit' => $this->timeUnit->value,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            eventMaxCount: (int) $data['eventMaxCount'],
            frequencyTargetingSetting: FrequencyTargetingSetting::from($data['frequencyTargetingSetting']),
            timeCount: (int) $data['timeCount'],
            timeUnit: TimeUnit::from($data['timeUnit']),
        );
    }
}
