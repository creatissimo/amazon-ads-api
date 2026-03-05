<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AudioCreative
{
    private function __construct(
        private string $type,
        private array $settings,
    ) {
    }

    public static function standardAudioSettings(array $settings): self
    {
        return new self('standardAudioSettings', $settings);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getSettings(): array
    {
        return $this->settings;
    }

    public function toArray(): array
    {
        return [
            $this->type => $this->settings,
        ];
    }

    public static function fromArray(array $data): self
    {
        if (isset($data['standardAudioSettings'])) {
            return self::standardAudioSettings($data['standardAudioSettings']);
        }

        throw new \InvalidArgumentException('Unknown AudioCreative type. Supported types: standardAudioSettings.');
    }
}

