<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetingSettings
{
    public function __construct(
        private AmazonViewability $amazonViewability,
        private TimeZoneType $timeZoneType,
        private UserLocationSignal $userLocationSignal,
        private ?AutomatedTargetingTactic $automatedTargetingTactic = null,
        private ?DefaultAudienceTargetingMatchType $defaultAudienceTargetingMatchType = null,
        private ?bool $enableLanguageTargeting = null,
        private ?SiteLanguage $siteLanguage = null,
        private ?TacticsConvertersExclusionType $tacticsConvertersExclusionType = null,
        private ?string $targetedPGDealId = null,
        private ?VideoCompletionTier $videoCompletionTier = null,
    ) {
    }

    public function getAmazonViewability(): AmazonViewability
    {
        return $this->amazonViewability;
    }

    public function setAmazonViewability(AmazonViewability $amazonViewability): self
    {
        $this->amazonViewability = $amazonViewability;

        return $this;
    }

    public function getTimeZoneType(): TimeZoneType
    {
        return $this->timeZoneType;
    }

    public function setTimeZoneType(TimeZoneType $timeZoneType): self
    {
        $this->timeZoneType = $timeZoneType;

        return $this;
    }

    public function getUserLocationSignal(): UserLocationSignal
    {
        return $this->userLocationSignal;
    }

    public function setUserLocationSignal(UserLocationSignal $userLocationSignal): self
    {
        $this->userLocationSignal = $userLocationSignal;

        return $this;
    }

    public function getAutomatedTargetingTactic(): ?AutomatedTargetingTactic
    {
        return $this->automatedTargetingTactic;
    }

    public function setAutomatedTargetingTactic(?AutomatedTargetingTactic $automatedTargetingTactic): self
    {
        $this->automatedTargetingTactic = $automatedTargetingTactic;

        return $this;
    }

    public function getDefaultAudienceTargetingMatchType(): ?DefaultAudienceTargetingMatchType
    {
        return $this->defaultAudienceTargetingMatchType;
    }

    public function setDefaultAudienceTargetingMatchType(?DefaultAudienceTargetingMatchType $defaultAudienceTargetingMatchType): self
    {
        $this->defaultAudienceTargetingMatchType = $defaultAudienceTargetingMatchType;

        return $this;
    }

    public function getEnableLanguageTargeting(): ?bool
    {
        return $this->enableLanguageTargeting;
    }

    public function setEnableLanguageTargeting(?bool $enableLanguageTargeting): self
    {
        $this->enableLanguageTargeting = $enableLanguageTargeting;

        return $this;
    }

    public function getSiteLanguage(): ?SiteLanguage
    {
        return $this->siteLanguage;
    }

    public function setSiteLanguage(?SiteLanguage $siteLanguage): self
    {
        $this->siteLanguage = $siteLanguage;

        return $this;
    }

    public function getTacticsConvertersExclusionType(): ?TacticsConvertersExclusionType
    {
        return $this->tacticsConvertersExclusionType;
    }

    public function setTacticsConvertersExclusionType(?TacticsConvertersExclusionType $tacticsConvertersExclusionType): self
    {
        $this->tacticsConvertersExclusionType = $tacticsConvertersExclusionType;

        return $this;
    }

    public function getTargetedPGDealId(): ?string
    {
        return $this->targetedPGDealId;
    }

    public function setTargetedPGDealId(?string $targetedPGDealId): self
    {
        $this->targetedPGDealId = $targetedPGDealId;

        return $this;
    }

    public function getVideoCompletionTier(): ?VideoCompletionTier
    {
        return $this->videoCompletionTier;
    }

    public function setVideoCompletionTier(?VideoCompletionTier $videoCompletionTier): self
    {
        $this->videoCompletionTier = $videoCompletionTier;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            amazonViewability: AmazonViewability::fromArray($data['amazonViewability']),
            timeZoneType: TimeZoneType::from($data['timeZoneType']),
            userLocationSignal: UserLocationSignal::from($data['userLocationSignal']),
            automatedTargetingTactic: isset($data['automatedTargetingTactic']) ? AutomatedTargetingTactic::from($data['automatedTargetingTactic']) : null,
            defaultAudienceTargetingMatchType: isset($data['defaultAudienceTargetingMatchType']) ? DefaultAudienceTargetingMatchType::from($data['defaultAudienceTargetingMatchType']) : null,
            enableLanguageTargeting: isset($data['enableLanguageTargeting']) ? (bool) $data['enableLanguageTargeting'] : null,
            siteLanguage: isset($data['siteLanguage']) ? SiteLanguage::from($data['siteLanguage']) : null,
            tacticsConvertersExclusionType: isset($data['tacticsConvertersExclusionType']) ? TacticsConvertersExclusionType::from($data['tacticsConvertersExclusionType']) : null,
            targetedPGDealId: $data['targetedPGDealId'] ?? null,
            videoCompletionTier: isset($data['videoCompletionTier']) ? VideoCompletionTier::from($data['videoCompletionTier']) : null,
        );
    }
}
