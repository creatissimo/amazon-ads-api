<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class TargetAdGroupIdFilter
{
    public function __construct(
        private array $include,
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

    public function toArray(): array
    {
        $data = [
            'include' => $this->include,
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: $data['include'],
        );
    }
}
