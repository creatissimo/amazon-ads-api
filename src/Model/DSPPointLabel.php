<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DSPPointLabel: string
{
    case AIMP = 'AIMP';
    case AREA = 'AREA';
    case BID = 'BID';
    case CAS = 'CAS';
    case CPA = 'CPA';
    case CPC = 'CPC';
    case CPM = 'CPM';
    case DC = 'DC';
    case EIMP = 'EIMP';
    case EREA = 'EREA';
    case ROAS = 'ROAS';
    case SPEND = 'SPEND';
    case TAS = 'TAS';
}
