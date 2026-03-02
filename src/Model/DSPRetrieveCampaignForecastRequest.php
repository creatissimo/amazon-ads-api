<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPRetrieveCampaignForecastRequest
{
    public function __construct(
        private array $campaignForecastDescriptions = [],
    ) {
    }

    /** @return DSPCampaignForecastDescription[] */
    public function getCampaignForecastDescriptions(): array
    {
        return $this->campaignForecastDescriptions;
    }

    /** @param DSPCampaignForecastDescription[] $campaignForecastDescriptions */
    public function setCampaignForecastDescriptions(array $campaignForecastDescriptions): self
    {
        $this->campaignForecastDescriptions = $campaignForecastDescriptions;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->campaignForecastDescriptions !== []) {
            $data['campaignForecastDescriptions'] = array_map(
                static fn(DSPCampaignForecastDescription $v) => $v->toArray(),
                $this->campaignForecastDescriptions,
            );
        }

        return $data;
    }
}
