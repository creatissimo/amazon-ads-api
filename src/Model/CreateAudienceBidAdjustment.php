<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAudienceBidAdjustment
{
    public function __construct(
        private string $audienceId,
        private int $percentage,
    ) {
    }

    public function getAudienceId(): string
    {
        return $this->audienceId;
    }

    public function setAudienceId(string $audienceId): self
    {
        $this->audienceId = $audienceId;

        return $this;
    }

    public function getPercentage(): int
    {
        return $this->percentage;
    }

    public function setPercentage(int $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'audienceId' => $this->audienceId,
            'percentage' => $this->percentage,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            audienceId: $data['audienceId'],
            percentage: (int) $data['percentage'],
        );
    }
}
