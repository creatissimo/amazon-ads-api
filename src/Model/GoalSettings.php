<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

final class GoalSettings
{
    public function __construct(
        private Goal $goal,
        private KPI $kpi,
        private ?CurrencyCode $currencyCode = null,
        private ?float $kpiValue = null,
    ) {
    }

    public function getGoal(): Goal
    {
        return $this->goal;
    }

    public function setGoal(Goal $goal): self
    {
        $this->goal = $goal;

        return $this;
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

    public function getCurrencyCode(): ?CurrencyCode
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?CurrencyCode $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

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

    public static function fromArray(array $data): self
    {
        return new self(
            goal: Goal::from($data['goal']),
            kpi: KPI::from($data['kpi']),
            currencyCode: isset($data['currencyCode']) ? CurrencyCode::from($data['currencyCode']) : null,
            kpiValue: isset($data['kpiValue']) ? (float) $data['kpiValue'] : null,
        );
    }
}
