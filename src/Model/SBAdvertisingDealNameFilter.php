<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBAdvertisingDealNameFilter
{
    public function __construct(
        private array $include,
        private SBAdvertisingDealNameFilterType $queryTermMatchType,
    ) {
    }

    public function getInclude(): array
    {
        return $this->include;
    }

    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function getQueryTermMatchType(): SBAdvertisingDealNameFilterType
    {
        return $this->queryTermMatchType;
    }

    public function setQueryTermMatchType(SBAdvertisingDealNameFilterType $queryTermMatchType): self
    {
        $this->queryTermMatchType = $queryTermMatchType;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => $this->include,
            'queryTermMatchType' => $this->queryTermMatchType->value,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: $data['include'],
            queryTermMatchType: SBAdvertisingDealNameFilterType::from($data['queryTermMatchType']),
        );
    }
}
