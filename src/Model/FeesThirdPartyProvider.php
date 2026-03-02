<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum FeesThirdPartyProvider: string
{
    case COM_SCORE = 'COM_SCORE';
    case CPM_1 = 'CPM_1';
    case CPM_2 = 'CPM_2';
    case CPM_3 = 'CPM_3';
    case DOUBLE_CLICK_CAMPAIGN_MANAGER = 'DOUBLE_CLICK_CAMPAIGN_MANAGER';
    case DOUBLE_VERIFY = 'DOUBLE_VERIFY';
    case INTEGRAL_AD_SCIENCE = 'INTEGRAL_AD_SCIENCE';
}
