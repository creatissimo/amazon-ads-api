<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateDisplayCreative
{
    public function __construct(
        private ?array $standardDisplaySettings = null,
    ) {
    }

    public function getStandardDisplaySettings(): ?array
    {
        return $this->standardDisplaySettings;
    }

    public function setStandardDisplaySettings(?array $standardDisplaySettings): self
    {
        $this->standardDisplaySettings = $standardDisplaySettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->standardDisplaySettings !== null) {
            $data['standardDisplaySettings'] = $this->standardDisplaySettings;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            standardDisplaySettings: $data['standardDisplaySettings'] ?? null,
        );
    }
}

