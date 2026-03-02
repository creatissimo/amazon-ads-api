<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum OffAmazonBudgetControlStrategy: string
{
    case MAXIMIZE_REACH = 'MAXIMIZE_REACH';
    case MINIMIZE_SPEND = 'MINIMIZE_SPEND';
}
