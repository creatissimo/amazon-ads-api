<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class StoreEditionSchedule
{
    public function __construct(
        private ?string $endAt = null,
        private ?string $startAt = null,
    ) {
    }

    public function getEndAt(): ?string
    {
        return $this->endAt;
    }

    public function setEndAt(?string $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getStartAt(): ?string
    {
        return $this->startAt;
    }

    public function setStartAt(?string $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            endAt: $data['endAt'] ?? null,
            startAt: $data['startAt'] ?? null,
        );
    }
}
