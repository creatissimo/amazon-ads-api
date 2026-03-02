<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DeleteCampaignRequest
{
    public function __construct(
        private array $campaignIds = [],
    ) {
    }

    public function getCampaignIds(): array
    {
        return $this->campaignIds;
    }

    public function setCampaignIds(array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->campaignIds !== []) {
            $data['campaignIds'] = $this->campaignIds;
        }

        return $data;
    }
}
