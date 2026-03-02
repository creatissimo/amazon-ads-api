<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DeliveryStatus: string
{
    case DELIVERING = 'DELIVERING';
    case LIMITED = 'LIMITED';
    case NOT_DELIVERING = 'NOT_DELIVERING';
    case UNAVAILABLE = 'UNAVAILABLE';
}
