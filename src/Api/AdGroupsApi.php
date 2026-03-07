<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\AdGroupCreate;
use Creatissimo\AmazonAdsApi\Model\AdGroupMultiStatusResponseWithPartialErrors;
use Creatissimo\AmazonAdsApi\Model\AdGroupSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\AdGroupUpdate;
use Creatissimo\AmazonAdsApi\Model\QueryAdGroupRequest;

final class AdGroupsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/adGroups';
    private const PATH_QUERY = '/adsApi/v1/query/adGroups';
    private const PATH_UPDATE = '/adsApi/v1/update/adGroups';
    private const PATH_DELETE = '/adsApi/v1/delete/adGroups';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param AdGroupCreate[] $adGroups */
    public function create(array $adGroups): AdGroupMultiStatusResponseWithPartialErrors
    {
        $body = [
            'adGroups' => array_map(
                static fn(AdGroupCreate $a) => $a->toArray(),
                $adGroups,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return AdGroupMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }

    public function query(QueryAdGroupRequest $request): AdGroupSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return AdGroupSuccessResponse::fromArray($response->getData());
    }

    /** @param AdGroupUpdate[] $adGroups */
    public function update(array $adGroups): AdGroupMultiStatusResponseWithPartialErrors
    {
        $body = [
            'adGroups' => array_map(
                static fn(AdGroupUpdate $a) => $a->toArray(),
                $adGroups,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return AdGroupMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }

    /** @param string[] $adGroupIds */
    public function delete(array $adGroupIds): AdGroupMultiStatusResponseWithPartialErrors
    {
        $response = $this->httpClient->post(self::PATH_DELETE, ['adGroupIds' => $adGroupIds])->ensureMultiStatus();

        return AdGroupMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }
}
