<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateDomainTarget
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

    public function setDomainTargetDetails(array $domainTargetDetails): self
    {
        $this->domainTargetDetails = $domainTargetDetails;

        return $this;
    }

    public function getDomainTargetType(): string
    {
        return $this->domainTargetType;
    }

    public function setDomainTargetType(string $domainTargetType): self
    {
        $this->domainTargetType = $domainTargetType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'domainTargetDetails' => $this->domainTargetDetails,
            'domainTargetType' => $this->domainTargetType,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            domainTargetDetails: $data['domainTargetDetails'],
            domainTargetType: $data['domainTargetType'],
        );
    }
}

