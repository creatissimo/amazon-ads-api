<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCampaignForecastDescription
{
    public function __construct(
        private string $campaignId,
        private ?DSPEnabledFeaturesInCampaignForecast $enabledFeatures = null,
        private array $flightIds = [],
        private ?DSPReplanningSettings $replanningSettings = null,
    ) {
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setCampaignId(string $campaignId): self
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    public function getEnabledFeatures(): ?DSPEnabledFeaturesInCampaignForecast
    {
        return $this->enabledFeatures;
    }

    public function setEnabledFeatures(?DSPEnabledFeaturesInCampaignForecast $enabledFeatures): self
    {
        $this->enabledFeatures = $enabledFeatures;

        return $this;
    }

    public function getFlightIds(): array
    {
        return $this->flightIds;
    }

    public function setFlightIds(array $flightIds): self
    {
        $this->flightIds = $flightIds;

        return $this;
    }

    public function getReplanningSettings(): ?DSPReplanningSettings
    {
        return $this->replanningSettings;
    }

    public function setReplanningSettings(?DSPReplanningSettings $replanningSettings): self
    {
        $this->replanningSettings = $replanningSettings;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaignId: $data['campaignId'],
            enabledFeatures: isset($data['enabledFeatures']) ? DSPEnabledFeaturesInCampaignForecast::fromArray($data['enabledFeatures']) : null,
            flightIds: $data['flightIds'] ?? [],
            replanningSettings: isset($data['replanningSettings']) ? DSPReplanningSettings::fromArray($data['replanningSettings']) : null,
        );
    }
}
