<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum SBAdvertisingDealStatusEnum: string
{
    case DRAFT = 'DRAFT';
    case MODERATION_APPROVED = 'MODERATION_APPROVED';
    case PROPOSED = 'PROPOSED';
}
