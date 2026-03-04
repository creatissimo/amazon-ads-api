<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateTargetDetails
{
    private function __construct(
        private string $type,
        private object $target,
    ) {
    }

    public static function keywordTarget(CreateKeywordTarget $target): self
    {
        return new self('keywordTarget', $target);
    }

    public static function productTarget(CreateProductTarget $target): self
    {
        return new self('productTarget', $target);
    }

    public static function productCategoryTarget(CreateProductCategoryTarget $target): self
    {
        return new self('productCategoryTarget', $target);
    }

    public static function locationTarget(CreateLocationTarget $target): self
    {
        return new self('locationTarget', $target);
    }

    public static function themeTarget(CreateThemeTarget $target): self
    {
        return new self('themeTarget', $target);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTarget(): object
    {
        return $this->target;
    }

    public function toArray(): array
    {
        return [
            $this->type => $this->target->toArray(),
        ];
    }

    public static function fromArray(array $data): self
    {
        if (isset($data['keywordTarget'])) {
            return self::keywordTarget(CreateKeywordTarget::fromArray($data['keywordTarget']));
        }
        if (isset($data['productTarget'])) {
            return self::productTarget(CreateProductTarget::fromArray($data['productTarget']));
        }
        if (isset($data['productCategoryTarget'])) {
            return self::productCategoryTarget(CreateProductCategoryTarget::fromArray($data['productCategoryTarget']));
        }
        if (isset($data['locationTarget'])) {
            return self::locationTarget(CreateLocationTarget::fromArray($data['locationTarget']));
        }
        if (isset($data['themeTarget'])) {
            return self::themeTarget(CreateThemeTarget::fromArray($data['themeTarget']));
        }

        throw new \InvalidArgumentException('Unknown target detail type. Supported types: keywordTarget, productTarget, productCategoryTarget, locationTarget, themeTarget.');
    }
}

