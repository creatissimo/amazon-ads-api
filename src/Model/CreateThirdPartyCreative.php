<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateThirdPartyCreative
{
    public function __construct(
        private ?array $thirdPartyDisplaySettings = null,
        private ?array $thirdPartyVideoSettings = null,
    ) {
    }

    public function getThirdPartyDisplaySettings(): ?array
    {
        return $this->thirdPartyDisplaySettings;
    }

    public function setThirdPartyDisplaySettings(?array $thirdPartyDisplaySettings): self
    {
        $this->thirdPartyDisplaySettings = $thirdPartyDisplaySettings;

        return $this;
    }

    public function getThirdPartyVideoSettings(): ?array
    {
        return $this->thirdPartyVideoSettings;
    }

    public function setThirdPartyVideoSettings(?array $thirdPartyVideoSettings): self
    {
        $this->thirdPartyVideoSettings = $thirdPartyVideoSettings;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->thirdPartyDisplaySettings !== null) {
            $data['thirdPartyDisplaySettings'] = $this->thirdPartyDisplaySettings;
        }
        if ($this->thirdPartyVideoSettings !== null) {
            $data['thirdPartyVideoSettings'] = $this->thirdPartyVideoSettings;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            thirdPartyDisplaySettings: $data['thirdPartyDisplaySettings'] ?? null,
            thirdPartyVideoSettings: $data['thirdPartyVideoSettings'] ?? null,
        );
    }
}

