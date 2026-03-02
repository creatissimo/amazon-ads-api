<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum UserLocationSignal: string
{
    case CURRENT = 'CURRENT';
    case MULTIPLE_SIGNALS = 'MULTIPLE_SIGNALS';
}
