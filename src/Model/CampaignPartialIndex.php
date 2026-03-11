<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CampaignPartialIndex
{
    /**
     * @param Error[] $errors
     */
    public function __construct(
        private Campaign $campaign,
        private array $errors,
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

    /** @return Error[] */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /** @param Error[] $errors */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;

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
            'errors' => array_map(
                static fn(Error $v) => $v->toArray(),
                $this->errors,
            ),
            'index' => $this->index,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            campaign: Campaign::fromArray($data['campaign']),
            errors: array_map(
                static fn(array $e) => Error::fromArray($e),
                $data['errors'] ?? [],
            ),
            index: $data['index'],
        );
    }
}
