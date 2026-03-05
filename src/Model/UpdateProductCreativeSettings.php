<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class UpdateProductCreativeSettings
{
    public function __construct(
        private ?UpdateAdvertisedProducts $advertisedProduct = null,
        private ?UpdateSpotlightVideoSettings $spotlightVideos = null,
    ) {
    }

    public function getAdvertisedProduct(): ?UpdateAdvertisedProducts
    {
        return $this->advertisedProduct;
    }

    public function setAdvertisedProduct(?UpdateAdvertisedProducts $advertisedProduct): self
    {
        $this->advertisedProduct = $advertisedProduct;

        return $this;
    }

    public function getSpotlightVideos(): ?UpdateSpotlightVideoSettings
    {
        return $this->spotlightVideos;
    }

    public function setSpotlightVideos(?UpdateSpotlightVideoSettings $spotlightVideos): self
    {
        $this->spotlightVideos = $spotlightVideos;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->advertisedProduct !== null) {
            $data['advertisedProduct'] = $this->advertisedProduct->toArray();
        }
        if ($this->spotlightVideos !== null) {
            $data['spotlightVideos'] = $this->spotlightVideos->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisedProduct: isset($data['advertisedProduct']) ? UpdateAdvertisedProducts::fromArray($data['advertisedProduct']) : null,
            spotlightVideos: isset($data['spotlightVideos']) ? UpdateSpotlightVideoSettings::fromArray($data['spotlightVideos']) : null,
        );
    }
}

