<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum FeeValueType: string
{
    case FIXED_CPM = 'FIXED_CPM';
    case PERCENTAGE_OF_BUDGET = 'PERCENTAGE_OF_BUDGET';
    case PERCENTAGE_OF_SUPPLY_COST = 'PERCENTAGE_OF_SUPPLY_COST';
}
