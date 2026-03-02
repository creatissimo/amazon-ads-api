<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\SBQueryRecommendationTypeRequest;
use Creatissimo\AmazonAdsApi\Model\SBRecommendationCreate;
use Creatissimo\AmazonAdsApi\Model\SBRecommendationMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\SBRecommendationTypeSuccessResponse;

final class RecommendationsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/recommendations/sb';
    private const PATH_QUERY_TYPES = '/adsApi/v1/query/recommendationTypes/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param SBRecommendationCreate[] $recommendations */
    public function create(array $recommendations): SBRecommendationMultiStatusResponse
    {
        $body = [
            'recommendations' => array_map(
                static fn(SBRecommendationCreate $r) => $r->toArray(),
                $recommendations,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return SBRecommendationMultiStatusResponse::fromArray($response->getData());
    }

    public function queryTypes(SBQueryRecommendationTypeRequest $request): SBRecommendationTypeSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY_TYPES, $request->toArray())->ensureSuccess();

        return SBRecommendationTypeSuccessResponse::fromArray($response->getData());
    }
}
