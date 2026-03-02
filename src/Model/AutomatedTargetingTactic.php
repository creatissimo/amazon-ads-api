<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum AutomatedTargetingTactic: string
{
    case AWARENESS = 'AWARENESS';
    case CUSTOMER_ACQUISITION = 'CUSTOMER_ACQUISITION';
    case MAXIMIZE_PERFORMANCE = 'MAXIMIZE_PERFORMANCE';
    case PROSPECTING = 'PROSPECTING';
    case REMARKETING = 'REMARKETING';
    case RETENTION = 'RETENTION';
    case SEARCH = 'SEARCH';
}
