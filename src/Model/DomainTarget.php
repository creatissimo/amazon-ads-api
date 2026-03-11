<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DomainTarget
{
    public function __construct(
        private array $domainTargetDetails,
        private string $domainTargetType,
    ) {
    }

    public function getDomainTargetDetails(): array
    {
        return $this->domainTargetDetails;
    }

    public function getDomainTargetType(): string
    {
        return $this->domainTargetType;
    }

    public function toArray(): array
    {
        $data = [
            'domainTargetDetails' => $this->domainTargetDetails,
            'domainTargetType' => $this->domainTargetType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            domainTargetDetails: $data['domainTargetDetails'],
            domainTargetType: $data['domainTargetType'],
        );
    }
}

