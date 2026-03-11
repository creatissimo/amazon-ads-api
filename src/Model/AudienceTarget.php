<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AudienceTarget
{
    public function __construct(
        private array $audienceId,
        private ?string $acrossGroupOperator = null,
        private ?string $groupId = null,
        private ?string $inGroupOperator = null,
    ) {
    }

    public function getAudienceId(): array
    {
        return $this->audienceId;
    }

    public function getAcrossGroupOperator(): ?string
    {
        return $this->acrossGroupOperator;
    }

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function getInGroupOperator(): ?string
    {
        return $this->inGroupOperator;
    }

    public function toArray(): array
    {
        $data = [
            'audienceId' => $this->audienceId,
        ];

        if ($this->acrossGroupOperator !== null) {
            $data['acrossGroupOperator'] = $this->acrossGroupOperator;
        }
        if ($this->groupId !== null) {
            $data['groupId'] = $this->groupId;
        }
        if ($this->inGroupOperator !== null) {
            $data['inGroupOperator'] = $this->inGroupOperator;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            audienceId: $data['audienceId'],
            acrossGroupOperator: $data['acrossGroupOperator'] ?? null,
            groupId: $data['groupId'] ?? null,
            inGroupOperator: $data['inGroupOperator'] ?? null,
        );
    }
}

