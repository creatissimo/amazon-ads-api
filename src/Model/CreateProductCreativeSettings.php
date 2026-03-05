<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateProductCreativeSettings
{
    public function __construct(
        private CreateAdvertisedProducts $advertisedProduct,
        private ?string $headline = null,
        private ?CreateSpotlightVideoSettings $spotlightVideos = null,
    ) {
    }

    public function getAdvertisedProduct(): CreateAdvertisedProducts
    {
        return $this->advertisedProduct;
    }

    public function setAdvertisedProduct(CreateAdvertisedProducts $advertisedProduct): self
    {
        $this->advertisedProduct = $advertisedProduct;

        return $this;
    }

    public function getHeadline(): ?string
    {
        return $this->headline;
    }

    public function setHeadline(?string $headline): self
    {
        $this->headline = $headline;

        return $this;
    }

    public function getSpotlightVideos(): ?CreateSpotlightVideoSettings
    {
        return $this->spotlightVideos;
    }

    public function setSpotlightVideos(?CreateSpotlightVideoSettings $spotlightVideos): self
    {
        $this->spotlightVideos = $spotlightVideos;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'advertisedProduct' => $this->advertisedProduct->toArray(),
        ];

        if ($this->headline !== null) {
            $data['headline'] = $this->headline;
        }
        if ($this->spotlightVideos !== null) {
            $data['spotlightVideos'] = $this->spotlightVideos->toArray();
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            advertisedProduct: CreateAdvertisedProducts::fromArray($data['advertisedProduct']),
            headline: $data['headline'] ?? null,
            spotlightVideos: isset($data['spotlightVideos']) ? CreateSpotlightVideoSettings::fromArray($data['spotlightVideos']) : null,
        );
    }
}

