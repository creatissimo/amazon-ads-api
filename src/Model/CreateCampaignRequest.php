<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateCampaignRequest
{
    public function __construct(
        private array $campaigns = [],
    ) {
    }

    /** @return CampaignCreate[] */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }

    /** @param CampaignCreate[] $campaigns */
    public function setCampaigns(array $campaigns): self
    {
        $this->campaigns = $campaigns;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->campaigns !== []) {
            $data['campaigns'] = array_map(
                static fn(CampaignCreate $v) => $v->toArray(),
                $this->campaigns,
            );
        }

        return $data;
    }
}
