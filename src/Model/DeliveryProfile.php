<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DeliveryProfile: string
{
    case ASAP = 'ASAP';
    case EVEN = 'EVEN';
    case PACE_AHEAD = 'PACE_AHEAD';
}
