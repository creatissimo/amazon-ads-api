<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateCreative
{
    private function __construct(
        private string $type,
        private object $creative,
    ) {
    }

    public static function audioCreative(CreateAudioCreative $creative): self
    {
        return new self('audioCreative', $creative);
    }

    public static function displayCreative(CreateDisplayCreative $creative): self
    {
        return new self('displayCreative', $creative);
    }

    public static function thirdPartyCreative(CreateThirdPartyCreative $creative): self
    {
        return new self('thirdPartyCreative', $creative);
    }

    public static function videoCreative(CreateVideoCreative $creative): self
    {
        return new self('videoCreative', $creative);
    }

    public static function componentCreative(CreateComponentCreative $creative): self
    {
        return new self('componentCreative', $creative);
    }

    public static function productCreative(CreateProductCreative $creative): self
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
            return self::audioCreative(CreateAudioCreative::fromArray($data['audioCreative']));
        }
        if (isset($data['displayCreative'])) {
            return self::displayCreative(CreateDisplayCreative::fromArray($data['displayCreative']));
        }
        if (isset($data['thirdPartyCreative'])) {
            return self::thirdPartyCreative(CreateThirdPartyCreative::fromArray($data['thirdPartyCreative']));
        }
        if (isset($data['videoCreative'])) {
            return self::videoCreative(CreateVideoCreative::fromArray($data['videoCreative']));
        }
        if (isset($data['componentCreative'])) {
            return self::componentCreative(CreateComponentCreative::fromArray($data['componentCreative']));
        }
        if (isset($data['productCreative'])) {
            return self::productCreative(CreateProductCreative::fromArray($data['productCreative']));
        }

        throw new \InvalidArgumentException(
            'Unknown CreateCreative type. Supported types: audioCreative, displayCreative, thirdPartyCreative, videoCreative, componentCreative, productCreative.'
        );
    }
}

