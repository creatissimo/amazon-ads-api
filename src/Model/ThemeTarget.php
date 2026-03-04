<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class ThemeTarget
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

    public static function fromArray(array $data): self
    {
        return new self(
            matchType: ThemeMatchType::from($data['matchType']),
        );
    }
}

