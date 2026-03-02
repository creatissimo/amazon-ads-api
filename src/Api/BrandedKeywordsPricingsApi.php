<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\SBBrandedKeywordsPricingCreate;
use Creatissimo\AmazonAdsApi\Model\SBBrandedKeywordsPricingMultiStatusResponse;

final class BrandedKeywordsPricingsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/brandedKeywordsPricings/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param SBBrandedKeywordsPricingCreate[] $brandedKeywordsPricings */
    public function create(array $brandedKeywordsPricings): SBBrandedKeywordsPricingMultiStatusResponse
    {
        $body = [
            'brandedKeywordsPricings' => array_map(
                static fn(SBBrandedKeywordsPricingCreate $p) => $p->toArray(),
                $brandedKeywordsPricings,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return SBBrandedKeywordsPricingMultiStatusResponse::fromArray($response->getData());
    }
}
