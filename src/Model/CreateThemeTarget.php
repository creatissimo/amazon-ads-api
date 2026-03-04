<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateThemeTarget
{
    public function __construct(
        private ThemeMatchType $matchType,
    ) {
    }

    public function getMatchType(): ThemeMatchType
    {
        return $this->matchType;
    }

    public function setMatchType(ThemeMatchType $matchType): self
    {
        $this->matchType = $matchType;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'matchType' => $this->matchType->value,
        ];
    }

    public static function fromArray(array $data): self
    {
        return new self(
            matchType: ThemeMatchType::from($data['matchType']),
        );
    }
}

