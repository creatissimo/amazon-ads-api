<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum StorePublishState: string
{
    case DRAFT = 'DRAFT';
    case PUBLISH = 'PUBLISH';
}
