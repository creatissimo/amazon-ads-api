<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\AdCreate;
use Creatissimo\AmazonAdsApi\Model\AdMultiStatusResponseWithPartialErrors;
use Creatissimo\AmazonAdsApi\Model\AdSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\AdUpdate;
use Creatissimo\AmazonAdsApi\Model\QueryAdRequest;

final class AdsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/ads';
    private const PATH_QUERY = '/adsApi/v1/query/ads';
    private const PATH_UPDATE = '/adsApi/v1/update/ads';
    private const PATH_DELETE = '/adsApi/v1/delete/ads';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param AdCreate[] $ads */
    public function create(array $ads): AdMultiStatusResponseWithPartialErrors
    {
        $body = [
            'ads' => array_map(
                static fn(AdCreate $a) => $a->toArray(),
                $ads,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return AdMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }

    public function query(QueryAdRequest $request): AdSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return AdSuccessResponse::fromArray($response->getData());
    }

    /** @param AdUpdate[] $ads */
    public function update(array $ads): AdMultiStatusResponseWithPartialErrors
    {
        $body = [
            'ads' => array_map(
                static fn(AdUpdate $a) => $a->toArray(),
                $ads,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return AdMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }

    /** @param string[] $adIds */
    public function delete(array $adIds): AdMultiStatusResponseWithPartialErrors
    {
        $response = $this->httpClient->post(self::PATH_DELETE, ['adIds' => $adIds])->ensureMultiStatus();

        return AdMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }
}
