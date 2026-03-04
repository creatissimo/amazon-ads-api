<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Model;

enum KeywordMatchType: string
{
    case BROAD = 'BROAD';
    case EXACT = 'EXACT';
    case PHRASE = 'PHRASE';
}

