<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class AdGroupGoalSettings
{
    public function __construct(
        private ?KPI $kpi = null,
    ) {
    }

    public function getKpi(): ?KPI
    {
        return $this->kpi;
    }

    public function setKpi(?KPI $kpi): self
    {
        $this->kpi = $kpi;

        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->kpi !== null) {
            $data['kpi'] = $this->kpi->value;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            kpi: isset($data['kpi']) ? KPI::from($data['kpi']) : null,
        );
    }
}
