<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum Placement: string
{
    case HOME_PAGE = 'HOME_PAGE';
    case PRODUCT_PAGE = 'PRODUCT_PAGE';
    case REST_OF_SEARCH = 'REST_OF_SEARCH';
    case SITE_AMAZON_BUSINESS = 'SITE_AMAZON_BUSINESS';
    case TOP_OF_SEARCH = 'TOP_OF_SEARCH';
}
