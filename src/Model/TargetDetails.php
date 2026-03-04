<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetDetails
{
    private function __construct(
        private string $type,
        private object $target,
    ) {
    }

    public static function keywordTarget(KeywordTarget $target): self
    {
        return new self('keywordTarget', $target);
    }

    public static function productTarget(ProductTarget $target): self
    {
        return new self('productTarget', $target);
    }

    public static function productCategoryTarget(ProductCategoryTarget $target): self
    {
        return new self('productCategoryTarget', $target);
    }

    public static function locationTarget(LocationTarget $target): self
    {
        return new self('locationTarget', $target);
    }

    public static function themeTarget(ThemeTarget $target): self
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

    public static function fromArray(array $data): self
    {
        if (isset($data['keywordTarget'])) {
            return self::keywordTarget(KeywordTarget::fromArray($data['keywordTarget']));
        }
        if (isset($data['productTarget'])) {
            return self::productTarget(ProductTarget::fromArray($data['productTarget']));
        }
        if (isset($data['productCategoryTarget'])) {
            return self::productCategoryTarget(ProductCategoryTarget::fromArray($data['productCategoryTarget']));
        }
        if (isset($data['locationTarget'])) {
            return self::locationTarget(LocationTarget::fromArray($data['locationTarget']));
        }
        if (isset($data['themeTarget'])) {
            return self::themeTarget(ThemeTarget::fromArray($data['themeTarget']));
        }

        throw new \InvalidArgumentException('Unknown target detail type. Supported types: keywordTarget, productTarget, productCategoryTarget, locationTarget, themeTarget.');
    }
}

