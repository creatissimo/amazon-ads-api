<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum Recurrence: string
{
    case DAILY = 'DAILY';
    case LIFETIME = 'LIFETIME';
    case MONTHLY = 'MONTHLY';
}

