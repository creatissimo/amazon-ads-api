<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdExtensionAdExtensionTypeFilter
{
    public function __construct(
        private array $include,
    ) {
    }

    /** @return AdExtensionType[] */
    public function getInclude(): array
    {
        return $this->include;
    }

    /** @param AdExtensionType[] $include */
    public function setInclude(array $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'include' => array_map(
                static fn(AdExtensionType $v) => $v->value,
                $this->include,
            ),
        ];


        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            include: array_map(
                static fn(string $v) => AdExtensionType::from($v),
                $data['include'] ?? [],
            ),
        );
    }
}
