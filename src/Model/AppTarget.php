<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AppTarget
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

    public function getAppType(): string
    {
        return $this->appType;
    }

    public function toArray(): array
    {
        $data = [
            'appId' => $this->appId,
            'appType' => $this->appType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            appId: $data['appId'],
            appType: $data['appType'],
        );
    }
}

