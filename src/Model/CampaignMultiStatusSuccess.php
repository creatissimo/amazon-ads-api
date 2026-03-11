<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignMultiStatusSuccess
{
    public function __construct(
        private Campaign $campaign,
        private int $index,
    ) {
    }

    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    public function setCampaign(Campaign $campaign): self
    {
        $this->campaign = $campaign;

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

    public function toArray(): array
    {
        $data = [
            'campaign' => $this->campaign->toArray(),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaign: Campaign::fromArray($data['campaign']),
            index: $data['index'],
        );
    }
}
