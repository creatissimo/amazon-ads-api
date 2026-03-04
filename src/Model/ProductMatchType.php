<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum ProductMatchType: string
{
    case PRODUCT_EXACT = 'PRODUCT_EXACT';
    case PRODUCT_SIMILAR = 'PRODUCT_SIMILAR';
}

