<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPEnabledFeaturesInCampaignForecast
{
    public function __construct(
        private ?bool $campaignSettingsCache = null,
        private ?bool $curve = null,
        private ?bool $insights = null,
        private ?DSPForecastMetricsDescription $metrics = null,
        private ?bool $replanning = null,
    ) {
    }

    public function getCampaignSettingsCache(): ?bool
    {
        return $this->campaignSettingsCache;
    }

    public function setCampaignSettingsCache(?bool $campaignSettingsCache): self
    {
        $this->campaignSettingsCache = $campaignSettingsCache;

        return $this;
    }

    public function getCurve(): ?bool
    {
        return $this->curve;
    }

    public function setCurve(?bool $curve): self
    {
        $this->curve = $curve;

        return $this;
    }

    public function getInsights(): ?bool
    {
        return $this->insights;
    }

    public function setInsights(?bool $insights): self
    {
        $this->insights = $insights;

        return $this;
    }

    public function getMetrics(): ?DSPForecastMetricsDescription
    {
        return $this->metrics;
    }

    public function setMetrics(?DSPForecastMetricsDescription $metrics): self
    {
        $this->metrics = $metrics;

        return $this;
    }

    public function getReplanning(): ?bool
    {
        return $this->replanning;
    }

    public function setReplanning(?bool $replanning): self
    {
        $this->replanning = $replanning;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaignSettingsCache: isset($data['campaignSettingsCache']) ? (bool) $data['campaignSettingsCache'] : null,
            curve: isset($data['curve']) ? (bool) $data['curve'] : null,
            insights: isset($data['insights']) ? (bool) $data['insights'] : null,
            metrics: isset($data['metrics']) ? DSPForecastMetricsDescription::fromArray($data['metrics']) : null,
            replanning: isset($data['replanning']) ? (bool) $data['replanning'] : null,
        );
    }
}
