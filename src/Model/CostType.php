<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum CostType: string
{
    case CPC = 'CPC';
    case FIXED_PRICE = 'FIXED_PRICE';
    case VCPM = 'VCPM';
}

