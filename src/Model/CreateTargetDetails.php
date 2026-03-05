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

    public static function productAudienceTarget(CreateProductAudienceTarget $target): self
    {
        return new self('productAudienceTarget', $target);
    }

    public static function audienceTarget(CreateAudienceTarget $target): self
    {
        return new self('audienceTarget', $target);
    }

    public static function locationTarget(CreateLocationTarget $target): self
    {
        return new self('locationTarget', $target);
    }

    public static function domainTarget(CreateDomainTarget $target): self
    {
        return new self('domainTarget', $target);
    }

    public static function appTarget(CreateAppTarget $target): self
    {
        return new self('appTarget', $target);
    }

    public static function deviceTarget(CreateDeviceTarget $target): self
    {
        return new self('deviceTarget', $target);
    }

    public static function dayPartTarget(CreateDayPartTarget $target): self
    {
        return new self('dayPartTarget', $target);
    }

    public static function contentCategoryTarget(CreateContentCategoryTarget $target): self
    {
        return new self('contentCategoryTarget', $target);
    }

    public static function contentGenreTarget(CreateContentGenreTarget $target): self
    {
        return new self('contentGenreTarget', $target);
    }

    public static function contentRatingTarget(CreateContentRatingTarget $target): self
    {
        return new self('contentRatingTarget', $target);
    }

    public static function brandSafetyTierTarget(CreateBrandSafetyTierTarget $target): self
    {
        return new self('brandSafetyTierTarget', $target);
    }

    public static function brandSafetyCategoryTarget(CreateBrandSafetyCategoryTarget $target): self
    {
        return new self('brandSafetyCategoryTarget', $target);
    }

    public static function inventorySourceTarget(CreateInventorySourceTarget $target): self
    {
        return new self('inventorySourceTarget', $target);
    }

    public static function adInitiationTarget(CreateAdInitiationTarget $target): self
    {
        return new self('adInitiationTarget', $target);
    }

    public static function adPlayerSizeTarget(CreateAdPlayerSizeTarget $target): self
    {
        return new self('adPlayerSizeTarget', $target);
    }

    public static function videoAdFormatTarget(CreateVideoAdFormatTarget $target): self
    {
        return new self('videoAdFormatTarget', $target);
    }

    public static function thirdPartyTarget(CreateThirdPartyTarget $target): self
    {
        return new self('thirdPartyTarget', $target);
    }

    public static function themeTarget(CreateThemeTarget $target): self
    {
        return new self('themeTarget', $target);
    }

    public static function contentInstreamPositionTarget(CreateContentInstreamPositionTarget $target): self
    {
        return new self('contentInstreamPositionTarget', $target);
    }

    public static function contentOutstreamPositionTarget(CreateContentOutstreamPositionTarget $target): self
    {
        return new self('contentOutstreamPositionTarget', $target);
    }

    public static function videoContentDurationTarget(CreateVideoContentDurationTarget $target): self
    {
        return new self('videoContentDurationTarget', $target);
    }

    public static function foldPositionTarget(CreateFoldPositionTarget $target): self
    {
        return new self('foldPositionTarget', $target);
    }

    public static function nativeContentPositionTarget(CreateNativeContentPositionTarget $target): self
    {
        return new self('nativeContentPositionTarget', $target);
    }

    public static function placementTypeTarget(CreatePlacementTypeTarget $target): self
    {
        return new self('placementTypeTarget', $target);
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
        if (isset($data['productAudienceTarget'])) {
            return self::productAudienceTarget(CreateProductAudienceTarget::fromArray($data['productAudienceTarget']));
        }
        if (isset($data['audienceTarget'])) {
            return self::audienceTarget(CreateAudienceTarget::fromArray($data['audienceTarget']));
        }
        if (isset($data['locationTarget'])) {
            return self::locationTarget(CreateLocationTarget::fromArray($data['locationTarget']));
        }
        if (isset($data['domainTarget'])) {
            return self::domainTarget(CreateDomainTarget::fromArray($data['domainTarget']));
        }
        if (isset($data['appTarget'])) {
            return self::appTarget(CreateAppTarget::fromArray($data['appTarget']));
        }
        if (isset($data['deviceTarget'])) {
            return self::deviceTarget(CreateDeviceTarget::fromArray($data['deviceTarget']));
        }
        if (isset($data['dayPartTarget'])) {
            return self::dayPartTarget(CreateDayPartTarget::fromArray($data['dayPartTarget']));
        }
        if (isset($data['contentCategoryTarget'])) {
            return self::contentCategoryTarget(CreateContentCategoryTarget::fromArray($data['contentCategoryTarget']));
        }
        if (isset($data['contentGenreTarget'])) {
            return self::contentGenreTarget(CreateContentGenreTarget::fromArray($data['contentGenreTarget']));
        }
        if (isset($data['contentRatingTarget'])) {
            return self::contentRatingTarget(CreateContentRatingTarget::fromArray($data['contentRatingTarget']));
        }
        if (isset($data['brandSafetyTierTarget'])) {
            return self::brandSafetyTierTarget(CreateBrandSafetyTierTarget::fromArray($data['brandSafetyTierTarget']));
        }
        if (isset($data['brandSafetyCategoryTarget'])) {
            return self::brandSafetyCategoryTarget(CreateBrandSafetyCategoryTarget::fromArray($data['brandSafetyCategoryTarget']));
        }
        if (isset($data['inventorySourceTarget'])) {
            return self::inventorySourceTarget(CreateInventorySourceTarget::fromArray($data['inventorySourceTarget']));
        }
        if (isset($data['adInitiationTarget'])) {
            return self::adInitiationTarget(CreateAdInitiationTarget::fromArray($data['adInitiationTarget']));
        }
        if (isset($data['adPlayerSizeTarget'])) {
            return self::adPlayerSizeTarget(CreateAdPlayerSizeTarget::fromArray($data['adPlayerSizeTarget']));
        }
        if (isset($data['videoAdFormatTarget'])) {
            return self::videoAdFormatTarget(CreateVideoAdFormatTarget::fromArray($data['videoAdFormatTarget']));
        }
        if (isset($data['thirdPartyTarget'])) {
            return self::thirdPartyTarget(CreateThirdPartyTarget::fromArray($data['thirdPartyTarget']));
        }
        if (isset($data['themeTarget'])) {
            return self::themeTarget(CreateThemeTarget::fromArray($data['themeTarget']));
        }
        if (isset($data['contentInstreamPositionTarget'])) {
            return self::contentInstreamPositionTarget(CreateContentInstreamPositionTarget::fromArray($data['contentInstreamPositionTarget']));
        }
        if (isset($data['contentOutstreamPositionTarget'])) {
            return self::contentOutstreamPositionTarget(CreateContentOutstreamPositionTarget::fromArray($data['contentOutstreamPositionTarget']));
        }
        if (isset($data['videoContentDurationTarget'])) {
            return self::videoContentDurationTarget(CreateVideoContentDurationTarget::fromArray($data['videoContentDurationTarget']));
        }
        if (isset($data['foldPositionTarget'])) {
            return self::foldPositionTarget(CreateFoldPositionTarget::fromArray($data['foldPositionTarget']));
        }
        if (isset($data['nativeContentPositionTarget'])) {
            return self::nativeContentPositionTarget(CreateNativeContentPositionTarget::fromArray($data['nativeContentPositionTarget']));
        }
        if (isset($data['placementTypeTarget'])) {
            return self::placementTypeTarget(CreatePlacementTypeTarget::fromArray($data['placementTypeTarget']));
        }

        throw new \InvalidArgumentException(
            'Unknown target detail type. Supported types: keywordTarget, productTarget, productCategoryTarget, '
            . 'productAudienceTarget, audienceTarget, locationTarget, domainTarget, appTarget, deviceTarget, '
            . 'dayPartTarget, contentCategoryTarget, contentGenreTarget, contentRatingTarget, brandSafetyTierTarget, '
            . 'brandSafetyCategoryTarget, inventorySourceTarget, adInitiationTarget, adPlayerSizeTarget, '
            . 'videoAdFormatTarget, thirdPartyTarget, themeTarget, contentInstreamPositionTarget, '
            . 'contentOutstreamPositionTarget, videoContentDurationTarget, foldPositionTarget, '
            . 'nativeContentPositionTarget, placementTypeTarget.'
        );
    }
}

