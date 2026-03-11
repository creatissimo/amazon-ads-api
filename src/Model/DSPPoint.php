<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class DSPPoint
{
    public function __construct(
        private DSPXPoint $x,
        private ?string $pointType = null,
        private array $y = [],
    ) {
    }

    public function getX(): DSPXPoint
    {
        return $this->x;
    }

    public function setX(DSPXPoint $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getPointType(): ?string
    {
        return $this->pointType;
    }

    public function setPointType(?string $pointType): self
    {
        $this->pointType = $pointType;

        return $this;
    }

    /** @return DSPYPoint[] */
    public function getY(): array
    {
        return $this->y;
    }

    /** @param DSPYPoint[] $y */
    public function setY(array $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'x' => $this->x->toArray(),
        ];

        if ($this->pointType !== null) {
            $data['pointType'] = $this->pointType;
        }
        if ($this->y !== []) {
            $data['y'] = array_map(
                static fn(DSPYPoint $v) => $v->toArray(),
                $this->y,
            );
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            x: DSPXPoint::fromArray($data['x']),
            pointType: $data['pointType'] ?? null,
            y: array_map(
                static fn(array $v) => DSPYPoint::fromArray($v),
                $data['y'] ?? [],
            ),
        );
    }
}
