<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ContentRatingTarget
{
    public function __construct(
        private string $contentRatingType,
        private array $contentRatingTypeDetails,
    ) {
    }

    public function getContentRatingType(): string
    {
        return $this->contentRatingType;
    }

    public function getContentRatingTypeDetails(): array
    {
        return $this->contentRatingTypeDetails;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contentRatingType: $data['contentRatingType'],
            contentRatingTypeDetails: $data['contentRatingTypeDetails'],
        );
    }
}

