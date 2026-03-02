<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum RolloverStrategy: string
{
    case CUMULATIVE_BUDGET_ROLLOVER = 'CUMULATIVE_BUDGET_ROLLOVER';
    case NO_ROLLOVER = 'NO_ROLLOVER';
    case PRIOR_BUDGET_ROLLOVER = 'PRIOR_BUDGET_ROLLOVER';
}
