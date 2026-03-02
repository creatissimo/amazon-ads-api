<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPCampaignForecastMultiStatusSuccess
{
    public function __construct(
        private DSPCampaignForecast $campaignForecast,
        private int $index,
    ) {
    }

    public function getCampaignForecast(): DSPCampaignForecast
    {
        return $this->campaignForecast;
    }

    public function setCampaignForecast(DSPCampaignForecast $campaignForecast): self
    {
        $this->campaignForecast = $campaignForecast;

        return $this;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaignForecast: DSPCampaignForecast::fromArray($data['campaignForecast']),
            index: (int) $data['index'],
        );
    }
}
