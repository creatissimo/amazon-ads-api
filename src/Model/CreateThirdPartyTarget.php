<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateThirdPartyTarget
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

    public function setThirdPartyTargetDetails(array $thirdPartyTargetDetails): self
    {
        $this->thirdPartyTargetDetails = $thirdPartyTargetDetails;

        return $this;
    }

    public function getThirdPartyTargetType(): string
    {
        return $this->thirdPartyTargetType;
    }

    public function setThirdPartyTargetType(string $thirdPartyTargetType): self
    {
        $this->thirdPartyTargetType = $thirdPartyTargetType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'thirdPartyTargetDetails' => $this->thirdPartyTargetDetails,
            'thirdPartyTargetType' => $this->thirdPartyTargetType,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            thirdPartyTargetDetails: $data['thirdPartyTargetDetails'],
            thirdPartyTargetType: $data['thirdPartyTargetType'],
        );
    }
}

