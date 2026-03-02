<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\AdExtensionCreate;
use Creatissimo\AmazonAdsApi\Model\AdExtensionSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\AdExtensionUpdate;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\QueryAdExtensionRequest;

final class AdExtensionsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/adExtensions';
    private const PATH_QUERY = '/adsApi/v1/query/adExtensions';
    private const PATH_UPDATE = '/adsApi/v1/update/adExtensions';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param AdExtensionCreate[] $adExtensions */
    public function create(array $adExtensions): MultiStatusResponse
    {
        $body = [
            'adExtensions' => array_map(
                static fn(AdExtensionCreate $a) => $a->toArray(),
                $adExtensions,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    public function query(QueryAdExtensionRequest $request): AdExtensionSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return AdExtensionSuccessResponse::fromArray($response->getData());
    }

    /** @param AdExtensionUpdate[] $adExtensions */
    public function update(array $adExtensions): MultiStatusResponse
    {
        $body = [
            'adExtensions' => array_map(
                static fn(AdExtensionUpdate $a) => $a->toArray(),
                $adExtensions,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
