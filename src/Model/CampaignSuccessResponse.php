<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignSuccessResponse
{
    /**
     * @param Campaign[] $campaigns
     */
    public function __construct(
        private array $campaigns,
        private ?string $nextToken = null,
    ) {
    }

    /** @return Campaign[] */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }

    /** @param Campaign[] $campaigns */
    public function setCampaigns(array $campaigns): self
    {
        $this->campaigns = $campaigns;

        return $this;
    }

    public function getNextToken(): ?string
    {
        return $this->nextToken;
    }

    public function setNextToken(?string $nextToken): self
    {
        $this->nextToken = $nextToken;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'campaigns' => array_map(
                static fn(Campaign $v) => $v->toArray(),
                $this->campaigns,
            ),
        ];

        if ($this->nextToken !== null) {
            $data['nextToken'] = $this->nextToken;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        $campaigns = array_map(
            static fn(array $c) => Campaign::fromArray($c),
            $data['campaigns'] ?? [],
        );

        return new self(
            campaigns: $campaigns,
            nextToken: $data['nextToken'] ?? null,
        );
    }
}
