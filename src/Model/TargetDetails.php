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

    public static function adInitiationTarget(AdInitiationTarget $target): self
    {
        return new self('adInitiationTarget', $target);
    }

    public static function adPlayerSizeTarget(AdPlayerSizeTarget $target): self
    {
        return new self('adPlayerSizeTarget', $target);
    }

    public static function appTarget(AppTarget $target): self
    {
        return new self('appTarget', $target);
    }

    public static function audienceTarget(AudienceTarget $target): self
    {
        return new self('audienceTarget', $target);
    }

    public static function brandSafetyCategoryTarget(BrandSafetyCategoryTarget $target): self
    {
        return new self('brandSafetyCategoryTarget', $target);
    }

    public static function brandSafetyTierTarget(BrandSafetyTierTarget $target): self
    {
        return new self('brandSafetyTierTarget', $target);
    }

    public static function contentCategoryTarget(ContentCategoryTarget $target): self
    {
        return new self('contentCategoryTarget', $target);
    }

    public static function contentGenreTarget(ContentGenreTarget $target): self
    {
        return new self('contentGenreTarget', $target);
    }

    public static function contentInstreamPositionTarget(ContentInstreamPositionTarget $target): self
    {
        return new self('contentInstreamPositionTarget', $target);
    }

    public static function contentOutstreamPositionTarget(ContentOutstreamPositionTarget $target): self
    {
        return new self('contentOutstreamPositionTarget', $target);
    }

    public static function contentRatingTarget(ContentRatingTarget $target): self
    {
        return new self('contentRatingTarget', $target);
    }

    public static function dayPartTarget(DayPartTarget $target): self
    {
        return new self('dayPartTarget', $target);
    }

    public static function deviceTarget(DeviceTarget $target): self
    {
        return new self('deviceTarget', $target);
    }

    public static function domainTarget(DomainTarget $target): self
    {
        return new self('domainTarget', $target);
    }

    public static function foldPositionTarget(FoldPositionTarget $target): self
    {
        return new self('foldPositionTarget', $target);
    }

    public static function inventorySourceTarget(InventorySourceTarget $target): self
    {
        return new self('inventorySourceTarget', $target);
    }

    public static function keywordTarget(KeywordTarget $target): self
    {
        return new self('keywordTarget', $target);
    }

    public static function locationTarget(LocationTarget $target): self
    {
        return new self('locationTarget', $target);
    }

    public static function nativeContentPositionTarget(NativeContentPositionTarget $target): self
    {
        return new self('nativeContentPositionTarget', $target);
    }

    public static function placementTypeTarget(PlacementTypeTarget $target): self
    {
        return new self('placementTypeTarget', $target);
    }

    public static function productAudienceTarget(ProductAudienceTarget $target): self
    {
        return new self('productAudienceTarget', $target);
    }

    public static function productCategoryTarget(ProductCategoryTarget $target): self
    {
        return new self('productCategoryTarget', $target);
    }

    public static function productTarget(ProductTarget $target): self
    {
        return new self('productTarget', $target);
    }

    public static function themeTarget(ThemeTarget $target): self
    {
        return new self('themeTarget', $target);
    }

    public static function thirdPartyTarget(ThirdPartyTarget $target): self
    {
        return new self('thirdPartyTarget', $target);
    }

    public static function videoAdFormatTarget(VideoAdFormatTarget $target): self
    {
        return new self('videoAdFormatTarget', $target);
    }

    public static function videoContentDurationTarget(VideoContentDurationTarget $target): self
    {
        return new self('videoContentDurationTarget', $target);
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
        if (isset($data['adInitiationTarget'])) {
            return self::adInitiationTarget(AdInitiationTarget::fromArray($data['adInitiationTarget']));
        }
        if (isset($data['adPlayerSizeTarget'])) {
            return self::adPlayerSizeTarget(AdPlayerSizeTarget::fromArray($data['adPlayerSizeTarget']));
        }
        if (isset($data['appTarget'])) {
            return self::appTarget(AppTarget::fromArray($data['appTarget']));
        }
        if (isset($data['audienceTarget'])) {
            return self::audienceTarget(AudienceTarget::fromArray($data['audienceTarget']));
        }
        if (isset($data['brandSafetyCategoryTarget'])) {
            return self::brandSafetyCategoryTarget(BrandSafetyCategoryTarget::fromArray($data['brandSafetyCategoryTarget']));
        }
        if (isset($data['brandSafetyTierTarget'])) {
            return self::brandSafetyTierTarget(BrandSafetyTierTarget::fromArray($data['brandSafetyTierTarget']));
        }
        if (isset($data['contentCategoryTarget'])) {
            return self::contentCategoryTarget(ContentCategoryTarget::fromArray($data['contentCategoryTarget']));
        }
        if (isset($data['contentGenreTarget'])) {
            return self::contentGenreTarget(ContentGenreTarget::fromArray($data['contentGenreTarget']));
        }
        if (isset($data['contentInstreamPositionTarget'])) {
            return self::contentInstreamPositionTarget(ContentInstreamPositionTarget::fromArray($data['contentInstreamPositionTarget']));
        }
        if (isset($data['contentOutstreamPositionTarget'])) {
            return self::contentOutstreamPositionTarget(ContentOutstreamPositionTarget::fromArray($data['contentOutstreamPositionTarget']));
        }
        if (isset($data['contentRatingTarget'])) {
            return self::contentRatingTarget(ContentRatingTarget::fromArray($data['contentRatingTarget']));
        }
        if (isset($data['dayPartTarget'])) {
            return self::dayPartTarget(DayPartTarget::fromArray($data['dayPartTarget']));
        }
        if (isset($data['deviceTarget'])) {
            return self::deviceTarget(DeviceTarget::fromArray($data['deviceTarget']));
        }
        if (isset($data['domainTarget'])) {
            return self::domainTarget(DomainTarget::fromArray($data['domainTarget']));
        }
        if (isset($data['foldPositionTarget'])) {
            return self::foldPositionTarget(FoldPositionTarget::fromArray($data['foldPositionTarget']));
        }
        if (isset($data['inventorySourceTarget'])) {
            return self::inventorySourceTarget(InventorySourceTarget::fromArray($data['inventorySourceTarget']));
        }
        if (isset($data['keywordTarget'])) {
            return self::keywordTarget(KeywordTarget::fromArray($data['keywordTarget']));
        }
        if (isset($data['locationTarget'])) {
            return self::locationTarget(LocationTarget::fromArray($data['locationTarget']));
        }
        if (isset($data['nativeContentPositionTarget'])) {
            return self::nativeContentPositionTarget(NativeContentPositionTarget::fromArray($data['nativeContentPositionTarget']));
        }
        if (isset($data['placementTypeTarget'])) {
            return self::placementTypeTarget(PlacementTypeTarget::fromArray($data['placementTypeTarget']));
        }
        if (isset($data['productAudienceTarget'])) {
            return self::productAudienceTarget(ProductAudienceTarget::fromArray($data['productAudienceTarget']));
        }
        if (isset($data['productCategoryTarget'])) {
            return self::productCategoryTarget(ProductCategoryTarget::fromArray($data['productCategoryTarget']));
        }
        if (isset($data['productTarget'])) {
            return self::productTarget(ProductTarget::fromArray($data['productTarget']));
        }
        if (isset($data['themeTarget'])) {
            return self::themeTarget(ThemeTarget::fromArray($data['themeTarget']));
        }
        if (isset($data['thirdPartyTarget'])) {
            return self::thirdPartyTarget(ThirdPartyTarget::fromArray($data['thirdPartyTarget']));
        }
        if (isset($data['videoAdFormatTarget'])) {
            return self::videoAdFormatTarget(VideoAdFormatTarget::fromArray($data['videoAdFormatTarget']));
        }
        if (isset($data['videoContentDurationTarget'])) {
            return self::videoContentDurationTarget(VideoContentDurationTarget::fromArray($data['videoContentDurationTarget']));
        }

        throw new \InvalidArgumentException(
            'Unknown target detail type. Supported types: adInitiationTarget, adPlayerSizeTarget, appTarget, '
            . 'audienceTarget, brandSafetyCategoryTarget, brandSafetyTierTarget, contentCategoryTarget, '
            . 'contentGenreTarget, contentInstreamPositionTarget, contentOutstreamPositionTarget, contentRatingTarget, '
            . 'dayPartTarget, deviceTarget, domainTarget, foldPositionTarget, inventorySourceTarget, keywordTarget, '
            . 'locationTarget, nativeContentPositionTarget, placementTypeTarget, productAudienceTarget, '
            . 'productCategoryTarget, productTarget, themeTarget, thirdPartyTarget, videoAdFormatTarget, '
            . 'videoContentDurationTarget.'
        );
    }
}
