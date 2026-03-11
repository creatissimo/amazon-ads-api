<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ThirdPartyTarget
{
    public function __construct(
        private array $thirdPartyTargetDetails,
        private string $thirdPartyTargetType,
    ) {
    }

    public function getThirdPartyTargetDetails(): array
    {
        return $this->thirdPartyTargetDetails;
    }

    public function getThirdPartyTargetType(): string
    {
        return $this->thirdPartyTargetType;
    }

    public function toArray(): array
    {
        $data = [
            'thirdPartyTargetDetails' => $this->thirdPartyTargetDetails,
            'thirdPartyTargetType' => $this->thirdPartyTargetType,
        ];

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            thirdPartyTargetDetails: $data['thirdPartyTargetDetails'],
            thirdPartyTargetType: $data['thirdPartyTargetType'],
        );
    }
}

