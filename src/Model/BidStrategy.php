<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum BidStrategy: string
{
    case MANUAL = 'MANUAL';
    case NEW_TO_BRAND = 'NEW_TO_BRAND';
    case PRIORITIZE_KPI_TARGET = 'PRIORITIZE_KPI_TARGET';
    case RULE_BASED = 'RULE_BASED';
    case SALES_DOWN_ONLY = 'SALES_DOWN_ONLY';
    case SALES_UP_AND_DOWN = 'SALES_UP_AND_DOWN';
    case SPEND_BUDGET_IN_FULL = 'SPEND_BUDGET_IN_FULL';
    case USE_CAMPAIGN_STRATEGY = 'USE_CAMPAIGN_STRATEGY';
}
