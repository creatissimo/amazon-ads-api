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

    public function toArray(): array
    {
        $data = [
            'deviceType' => $this->deviceType,
        ];

        if ($this->deviceOrientation !== null) {
            $data['deviceOrientation'] = $this->deviceOrientation;
        }
        if ($this->mobileDevice !== null) {
            $data['mobileDevice'] = $this->mobileDevice;
        }
        if ($this->mobileEnvironment !== null) {
            $data['mobileEnvironment'] = $this->mobileEnvironment;
        }
        if ($this->mobileOs !== null) {
            $data['mobileOs'] = $this->mobileOs;
        }

        return $data;
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

