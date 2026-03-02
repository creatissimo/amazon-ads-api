<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;

final class BrandedKeywordsPricingsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/brandedKeywordsPricings/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param array[] $brandedKeywordsPricings */
    public function create(array $brandedKeywordsPricings): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_CREATE,
            ['brandedKeywordsPricings' => $brandedKeywordsPricings],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
