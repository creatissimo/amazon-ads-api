<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum InventoryType: string
{
    case AAP_MOBILE_APP = 'AAP_MOBILE_APP';
    case AMAZON_MOBILE_DISPLAY = 'AMAZON_MOBILE_DISPLAY';
    case AUDIO = 'AUDIO';
    case AUDIO_AMAZON_DEAL = 'AUDIO_AMAZON_DEAL';
    case DISPLAY = 'DISPLAY';
    case LIVE_EVENTS = 'LIVE_EVENTS';
    case ONLINE_VIDEO = 'ONLINE_VIDEO';
    case PODCAST = 'PODCAST';
    case STANDARD_DISPLAY = 'STANDARD_DISPLAY';
    case STREAMING_TV = 'STREAMING_TV';
    case STREAMING_TV_AMAZON_DEAL = 'STREAMING_TV_AMAZON_DEAL';
    case VIDEO = 'VIDEO';
}
