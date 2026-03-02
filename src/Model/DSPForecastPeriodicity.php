<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DSPForecastPeriodicity: string
{
    case DAILY = 'DAILY';
    case LIFETIME = 'LIFETIME';
    case MONTHLY = 'MONTHLY';
    case WEEKLY = 'WEEKLY';
}
