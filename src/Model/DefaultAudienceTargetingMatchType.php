<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum DefaultAudienceTargetingMatchType: string
{
    case EXACT = 'EXACT';
    case SIMILAR = 'SIMILAR';
}
