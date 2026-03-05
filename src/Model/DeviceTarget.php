<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DeviceTarget
{
    public function __construct(
        private string $deviceType,
        private ?string $deviceOrientation = null,
        private ?string $mobileDevice = null,
        private ?string $mobileEnvironment = null,
        private ?string $mobileOs = null,
    ) {
    }

    public function getDeviceType(): string
    {
        return $this->deviceType;
    }

    public function getDeviceOrientation(): ?string
    {
        return $this->deviceOrientation;
    }

    public function getMobileDevice(): ?string
    {
        return $this->mobileDevice;
    }

    public function getMobileEnvironment(): ?string
    {
        return $this->mobileEnvironment;
    }

    public function getMobileOs(): ?string
    {
        return $this->mobileOs;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            deviceType: $data['deviceType'],
            deviceOrientation: $data['deviceOrientation'] ?? null,
            mobileDevice: $data['mobileDevice'] ?? null,
            mobileEnvironment: $data['mobileEnvironment'] ?? null,
            mobileOs: $data['mobileOs'] ?? null,
        );
    }
}

