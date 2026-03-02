<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateAutoCreationSettings
{
    public function __construct(
        private ?bool $autoCreateTargets = null,
        private ?bool $autoManageCampaign = null,
    ) {
    }

    public function getAutoCreateTargets(): ?bool
    {
        return $this->autoCreateTargets;
    }

    public function setAutoCreateTargets(?bool $autoCreateTargets): self
    {
        $this->autoCreateTargets = $autoCreateTargets;

        return $this;
    }

    public function getAutoManageCampaign(): ?bool
    {
        return $this->autoManageCampaign;
    }

    public function setAutoManageCampaign(?bool $autoManageCampaign): self
    {
        $this->autoManageCampaign = $autoManageCampaign;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->autoCreateTargets !== null) {
            $data['autoCreateTargets'] = $this->autoCreateTargets;
        }
        if ($this->autoManageCampaign !== null) {
            $data['autoManageCampaign'] = $this->autoManageCampaign;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            autoCreateTargets: isset($data['autoCreateTargets']) ? (bool) $data['autoCreateTargets'] : null,
            autoManageCampaign: isset($data['autoManageCampaign']) ? (bool) $data['autoManageCampaign'] : null,
        );
    }
}
