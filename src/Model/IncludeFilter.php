<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

class IncludeFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    public function getInclude(): array
    {
        return $this->include;
    }

    public function setInclude(array $include): static
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        return ['include' => $this->include];
    }
}

