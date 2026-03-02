<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DSPDeliverInFullConfidenceLevel: string
{
    case HIGH = 'HIGH';
    case LOW = 'LOW';
    case MEDIUM = 'MEDIUM';
    case UNAVAILABLE = 'UNAVAILABLE';
}
