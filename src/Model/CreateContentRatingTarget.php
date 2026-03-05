<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateContentRatingTarget
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

    public function setContentRatingType(string $contentRatingType): self
    {
        $this->contentRatingType = $contentRatingType;

        return $this;
    }

    public function getContentRatingTypeDetails(): array
    {
        return $this->contentRatingTypeDetails;
    }

    public function setContentRatingTypeDetails(array $contentRatingTypeDetails): self
    {
        $this->contentRatingTypeDetails = $contentRatingTypeDetails;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'contentRatingType' => $this->contentRatingType,
            'contentRatingTypeDetails' => $this->contentRatingTypeDetails,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contentRatingType: $data['contentRatingType'],
            contentRatingTypeDetails: $data['contentRatingTypeDetails'],
        );
    }
}

