<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DSPSelectedForecastMetric: string
{
    case AIMP = 'AIMP';
    case AREA = 'AREA';
    case CAS = 'CAS';
    case CPA = 'CPA';
    case CPC = 'CPC';
    case CPM = 'CPM';
    case DC = 'DC';
    case EIMP = 'EIMP';
    case EREA = 'EREA';
    case IREA = 'IREA';
    case ROAS = 'ROAS';
    case TAS = 'TAS';
}
