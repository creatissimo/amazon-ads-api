<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\BrandStoreEditionPublishVersionMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\BrandStoreEditionPublishVersionSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\BrandStoreEditionPublishVersionUpdate;
use Creatissimo\AmazonAdsApi\Model\BrandStoreEditionSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\BrandStorePageSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\BrandStoreSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\QueryBrandStoreEditionPublishVersionRequest;
use Creatissimo\AmazonAdsApi\Model\QueryBrandStorePageRequest;
use Creatissimo\AmazonAdsApi\Model\QueryBrandStoreRequest;

final class BrandStoresApi
{
    private const PATH_QUERY_STORES = '/adsApi/v1/query/brandStores';
    private const PATH_QUERY_PAGES = '/adsApi/v1/query/brandStorePages';
    private const PATH_QUERY_PUBLISH_VERSIONS = '/adsApi/v1/query/brandStoreEditionPublishVersions';
    private const PATH_UPDATE_PUBLISH_VERSIONS = '/adsApi/v1/update/brandStoreEditionPublishVersions';
    private const PATH_LIST_EDITIONS = '/adsApi/v1/brandStoreEditions';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    public function queryStores(QueryBrandStoreRequest $request): BrandStoreSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY_STORES, $request->toArray())->ensureSuccess();

        return BrandStoreSuccessResponse::fromArray($response->getData());
    }

    public function queryPages(QueryBrandStorePageRequest $request): BrandStorePageSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY_PAGES, $request->toArray())->ensureSuccess();

        return BrandStorePageSuccessResponse::fromArray($response->getData());
    }

    public function queryEditionPublishVersions(QueryBrandStoreEditionPublishVersionRequest $request): BrandStoreEditionPublishVersionSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY_PUBLISH_VERSIONS, $request->toArray())->ensureSuccess();

        return BrandStoreEditionPublishVersionSuccessResponse::fromArray($response->getData());
    }

    /** @param BrandStoreEditionPublishVersionUpdate[] $publishVersions */
    public function updateEditionPublishVersions(array $publishVersions): BrandStoreEditionPublishVersionMultiStatusResponse
    {
        $body = [
            'brandStoreEditionPublishVersions' => array_map(
                static fn(BrandStoreEditionPublishVersionUpdate $v) => $v->toArray(),
                $publishVersions,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE_PUBLISH_VERSIONS, $body)->ensureMultiStatus();

        return BrandStoreEditionPublishVersionMultiStatusResponse::fromArray($response->getData());
    }

    public function listEditions(?string $storeId = null, ?string $nextToken = null, ?int $maxResults = null): BrandStoreEditionSuccessResponse
    {
        $query = [];

        if ($storeId !== null) {
            $query[] = 'storeId=' . urlencode($storeId);
        }
        if ($nextToken !== null) {
            $query[] = 'nextToken=' . urlencode($nextToken);
        }
        if ($maxResults !== null) {
            $query[] = 'maxResults=' . $maxResults;
        }

        $path = self::PATH_LIST_EDITIONS;

        if ($query !== []) {
            $path .= '?' . implode('&', $query);
        }

        $response = $this->httpClient->get($path)->ensureSuccess();

        return BrandStoreEditionSuccessResponse::fromArray($response->getData());
    }
}
