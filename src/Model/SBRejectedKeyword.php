<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class SBRejectedKeyword
{
    public function __construct(
        private string $keyword,
        private string $reason,
    ) {
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            keyword: $data['keyword'],
            reason: $data['reason'],
        );
    }
}
