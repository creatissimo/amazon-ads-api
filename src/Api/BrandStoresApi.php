<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;

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

    public function queryStores(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_QUERY_STORES, $filters)->ensureSuccess();

        return $response->getData();
    }

    public function queryPages(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_QUERY_PAGES, $filters)->ensureSuccess();

        return $response->getData();
    }

    public function queryEditionPublishVersions(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_QUERY_PUBLISH_VERSIONS, $filters)->ensureSuccess();

        return $response->getData();
    }

    /** @param array[] $publishVersions */
    public function updateEditionPublishVersions(array $publishVersions): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_UPDATE_PUBLISH_VERSIONS,
            ['brandStoreEditionPublishVersions' => $publishVersions],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    public function listEditions(?string $storeId = null, ?string $nextToken = null, ?int $maxResults = null): array
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

        return $response->getData();
    }
}
