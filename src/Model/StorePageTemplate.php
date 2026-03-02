<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum StorePageTemplate: string
{
    case BLANK = 'BLANK';
    case HIGHLIGHT = 'HIGHLIGHT';
    case MARQUEE = 'MARQUEE';
    case PRODUCT_COLLECTION = 'PRODUCT_COLLECTION';
    case PRODUCT_GRID = 'PRODUCT_GRID';
}
