<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum StorePublishStatus: string
{
    case DRAFT = 'DRAFT';
    case REVIEW_IN_PROGRESS = 'REVIEW_IN_PROGRESS';
}
