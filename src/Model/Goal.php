<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum Goal: string
{
    case AWARENESS = 'AWARENESS';
    case CONSIDERATION = 'CONSIDERATION';
    case CONVERSIONS = 'CONVERSIONS';
}

