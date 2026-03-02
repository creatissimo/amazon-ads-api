<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum ViewabilityTier: string
{
    case ALL_TIERS = 'ALL_TIERS';
    case GREATER_THAN_40_PERCENT = 'GREATER_THAN_40_PERCENT';
    case GREATER_THAN_50_PERCENT = 'GREATER_THAN_50_PERCENT';
    case GREATER_THAN_60_PERCENT = 'GREATER_THAN_60_PERCENT';
    case GREATER_THAN_70_PERCENT = 'GREATER_THAN_70_PERCENT';
    case LESS_THAN_40_PERCENT = 'LESS_THAN_40_PERCENT';
}
