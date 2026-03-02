<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum AdGroupNameFilterType: string
{
    case BROAD_MATCH = 'BROAD_MATCH';
    case EXACT_MATCH = 'EXACT_MATCH';
}
