<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DSPSpendDimensionType: string
{
    case ADVERTISER = 'ADVERTISER';
    case CAMPAIGN = 'CAMPAIGN';
    case COMMITMENT = 'COMMITMENT';
    case DEAL = 'DEAL';
}
