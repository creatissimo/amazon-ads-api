<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetProductIdFilter
{
    public function __construct(
        private array $include,
        private TargetProductIdFilterType $queryTermMatchType,
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

    public function getQueryTermMatchType(): TargetProductIdFilterType
    {
        return $this->queryTermMatchType;
    }

    public function setQueryTermMatchType(TargetProductIdFilterType $queryTermMatchType): self
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
            queryTermMatchType: TargetProductIdFilterType::from($data['queryTermMatchType']),
        );
    }
}
