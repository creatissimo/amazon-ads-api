<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionAdExtensionStatusFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return AdExtensionStatus[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param AdExtensionStatus[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(AdExtensionStatus $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => AdExtensionStatus::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
