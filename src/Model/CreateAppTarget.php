<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAppTarget
{
    public function __construct(
        private string $appId,
        private string $appType,
    ) {
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function setAppId(string $appId): self
    {
        $this->appId = $appId;

        return $this;
    }

    public function getAppType(): string
    {
        return $this->appType;
    }

    public function setAppType(string $appType): self
    {
        $this->appType = $appType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'appId' => $this->appId,
            'appType' => $this->appType,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            appId: $data['appId'],
            appType: $data['appType'],
        );
    }
}

