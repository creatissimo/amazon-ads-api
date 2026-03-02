<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateTargetingSettings
{
    public function __construct(
        private CreateAmazonViewability $amazonViewability,
        private TimeZoneType $timeZoneType,
        private UserLocationSignal $userLocationSignal,
        private ?DefaultAudienceTargetingMatchType $defaultAudienceTargetingMatchType = null,
        private ?bool $enableLanguageTargeting = null,
        private ?TacticsConvertersExclusionType $tacticsConvertersExclusionType = null,
        private ?string $targetedPGDealId = null,
        private ?VideoCompletionTier $videoCompletionTier = null,
    ) {
    }

    public function getAmazonViewability(): CreateAmazonViewability
    {
        return $this->amazonViewability;
    }

    public function setAmazonViewability(CreateAmazonViewability $amazonViewability): self
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

    public function toArray(): array
    {
        $data = [
            'amazonViewability' => $this->amazonViewability->toArray(),
            'timeZoneType' => $this->timeZoneType->value,
            'userLocationSignal' => $this->userLocationSignal->value,
        ];

        if ($this->defaultAudienceTargetingMatchType !== null) {
            $data['defaultAudienceTargetingMatchType'] = $this->defaultAudienceTargetingMatchType->value;
        }
        if ($this->enableLanguageTargeting !== null) {
            $data['enableLanguageTargeting'] = $this->enableLanguageTargeting;
        }
        if ($this->tacticsConvertersExclusionType !== null) {
            $data['tacticsConvertersExclusionType'] = $this->tacticsConvertersExclusionType->value;
        }
        if ($this->targetedPGDealId !== null) {
            $data['targetedPGDealId'] = $this->targetedPGDealId;
        }
        if ($this->videoCompletionTier !== null) {
            $data['videoCompletionTier'] = $this->videoCompletionTier->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            amazonViewability: CreateAmazonViewability::fromArray($data['amazonViewability']),
            timeZoneType: TimeZoneType::from($data['timeZoneType']),
            userLocationSignal: UserLocationSignal::from($data['userLocationSignal']),
            defaultAudienceTargetingMatchType: isset($data['defaultAudienceTargetingMatchType']) ? DefaultAudienceTargetingMatchType::from($data['defaultAudienceTargetingMatchType']) : null,
            enableLanguageTargeting: isset($data['enableLanguageTargeting']) ? (bool) $data['enableLanguageTargeting'] : null,
            tacticsConvertersExclusionType: isset($data['tacticsConvertersExclusionType']) ? TacticsConvertersExclusionType::from($data['tacticsConvertersExclusionType']) : null,
            targetedPGDealId: $data['targetedPGDealId'] ?? null,
            videoCompletionTier: isset($data['videoCompletionTier']) ? VideoCompletionTier::from($data['videoCompletionTier']) : null,
        );
    }
}
