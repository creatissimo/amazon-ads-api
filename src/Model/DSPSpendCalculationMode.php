<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DSPSpendCalculationMode: string
{
    case ADVERTISER_ACCOUNT = 'ADVERTISER_ACCOUNT';
    case CAMPAIGN = 'CAMPAIGN';
    case MANAGER_ACCOUNT = 'MANAGER_ACCOUNT';
}
