<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateCreative
{
    private function __construct(
        private string $type,
        private object $creative,
    ) {
    }

    public static function audioCreative(UpdateAudioCreative $creative): self
    {
        return new self('audioCreative', $creative);
    }

    public static function displayCreative(UpdateDisplayCreative $creative): self
    {
        return new self('displayCreative', $creative);
    }

    public static function thirdPartyCreative(UpdateThirdPartyCreative $creative): self
    {
        return new self('thirdPartyCreative', $creative);
    }

    public static function videoCreative(UpdateVideoCreative $creative): self
    {
        return new self('videoCreative', $creative);
    }

    public static function componentCreative(UpdateComponentCreative $creative): self
    {
        return new self('componentCreative', $creative);
    }

    public static function productCreative(UpdateProductCreative $creative): self
    {
        return new self('productCreative', $creative);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCreative(): object
    {
        return $this->creative;
    }

    public function toArray(): array
    {
        return [
            $this->type => $this->creative->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        if (isset($data['audioCreative'])) {
            return self::audioCreative(UpdateAudioCreative::fromArray($data['audioCreative']));
        }
        if (isset($data['displayCreative'])) {
            return self::displayCreative(UpdateDisplayCreative::fromArray($data['displayCreative']));
        }
        if (isset($data['thirdPartyCreative'])) {
            return self::thirdPartyCreative(UpdateThirdPartyCreative::fromArray($data['thirdPartyCreative']));
        }
        if (isset($data['videoCreative'])) {
            return self::videoCreative(UpdateVideoCreative::fromArray($data['videoCreative']));
        }
        if (isset($data['componentCreative'])) {
            return self::componentCreative(UpdateComponentCreative::fromArray($data['componentCreative']));
        }
        if (isset($data['productCreative'])) {
            return self::productCreative(UpdateProductCreative::fromArray($data['productCreative']));
        }

        throw new \InvalidArgumentException(
            'Unknown UpdateCreative type. Supported types: audioCreative, displayCreative, thirdPartyCreative, videoCreative, componentCreative, productCreative.'
        );
    }
}

