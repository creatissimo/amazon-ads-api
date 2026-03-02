<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum PrimaryInventoryType: string
{
    case AUDIO = 'AUDIO';
    case DISPLAY = 'DISPLAY';
    case VIDEO_OLV = 'VIDEO_OLV';
    case VIDEO_STV = 'VIDEO_STV';
}
