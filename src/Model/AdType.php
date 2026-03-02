<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum AdType: string
{
    case AUDIO = 'AUDIO';
    case COMPONENT = 'COMPONENT';
    case DISPLAY = 'DISPLAY';
    case PRODUCT_AD = 'PRODUCT_AD';
    case THIRD_PARTY = 'THIRD_PARTY';
    case VIDEO = 'VIDEO';
}

