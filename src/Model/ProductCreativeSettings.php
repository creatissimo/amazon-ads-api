<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ProductCreativeSettings
{
    public function __construct(
        private AdvertisedProducts $advertisedProduct,
        private ?string $headline = null,
        private ?SpotlightVideoSettings $spotlightVideos = null,
    ) {
    }

    public function getAdvertisedProduct(): AdvertisedProducts
    {
        return $this->advertisedProduct;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function getSpotlightVideos(): ?SpotlightVideoSettings
    {
        return $this->spotlightVideos;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisedProduct: AdvertisedProducts::fromArray($data['advertisedProduct']),
            headline: $data['headline'] ?? null,
            spotlightVideos: isset($data['spotlightVideos']) ? SpotlightVideoSettings::fromArray($data['spotlightVideos']) : null,
        );
    }
}

