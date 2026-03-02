<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum AdProduct: string
{
    case AMAZON_DSP = 'AMAZON_DSP';
    case SPONSORED_BRANDS = 'SPONSORED_BRANDS';
    case SPONSORED_DISPLAY = 'SPONSORED_DISPLAY';
    case SPONSORED_PRODUCTS = 'SPONSORED_PRODUCTS';
    case SPONSORED_TELEVISION = 'SPONSORED_TELEVISION';
}

