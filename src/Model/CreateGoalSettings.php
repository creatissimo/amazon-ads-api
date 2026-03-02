<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class CreateGoalSettings
{
    public function __construct(
        private KPI $kpi,
        private ?float $kpiValue = null,
    ) {
    }

    public function getKpi(): KPI
    {
        return $this->kpi;
    }

    public function setKpi(KPI $kpi): self
    {
        $this->kpi = $kpi;

        return $this;
    }

    public function getKpiValue(): ?float
    {
        return $this->kpiValue;
    }

    public function setKpiValue(?float $kpiValue): self
    {
        $this->kpiValue = $kpiValue;

        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'kpi' => $this->kpi->value,
        ];

        if ($this->kpiValue !== null) {
            $data['kpiValue'] = $this->kpiValue;
        }

        return $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            kpi: KPI::from($data['kpi']),
            kpiValue: isset($data['kpiValue']) ? (float) $data['kpiValue'] : null,
        );
    }
}
