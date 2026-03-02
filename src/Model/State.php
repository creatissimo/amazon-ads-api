<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum State: string
{
    case ARCHIVED = 'ARCHIVED';
    case ENABLED = 'ENABLED';
    case PAUSED = 'PAUSED';
}

