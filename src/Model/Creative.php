<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class Creative
{
    private function __construct(
        private string $type,
        private object $creative,
    ) {
    }

    public static function audioCreative(AudioCreative $creative): self
    {
        return new self('audioCreative', $creative);
    }

    public static function componentCreative(ComponentCreative $creative): self
    {
        return new self('componentCreative', $creative);
    }

    public static function displayCreative(DisplayCreative $creative): self
    {
        return new self('displayCreative', $creative);
    }

    public static function productCreative(ProductCreative $creative): self
    {
        return new self('productCreative', $creative);
    }

    public static function thirdPartyCreative(ThirdPartyCreative $creative): self
    {
        return new self('thirdPartyCreative', $creative);
    }

    public static function videoCreative(VideoCreative $creative): self
    {
        return new self('videoCreative', $creative);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCreative(): object
    {
        return $this->creative;
    }

    public static function fromArray(array $data): self
    {
        if (isset($data['audioCreative'])) {
            return self::audioCreative(AudioCreative::fromArray($data['audioCreative']));
        }
        if (isset($data['componentCreative'])) {
            return self::componentCreative(ComponentCreative::fromArray($data['componentCreative']));
        }
        if (isset($data['displayCreative'])) {
            return self::displayCreative(DisplayCreative::fromArray($data['displayCreative']));
        }
        if (isset($data['productCreative'])) {
            return self::productCreative(ProductCreative::fromArray($data['productCreative']));
        }
        if (isset($data['thirdPartyCreative'])) {
            return self::thirdPartyCreative(ThirdPartyCreative::fromArray($data['thirdPartyCreative']));
        }
        if (isset($data['videoCreative'])) {
            return self::videoCreative(VideoCreative::fromArray($data['videoCreative']));
        }

        throw new \InvalidArgumentException(
            'Unknown Creative type. Supported types: audioCreative, componentCreative, displayCreative, productCreative, thirdPartyCreative, videoCreative.'
        );
    }
}

