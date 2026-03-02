<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;

final class AdvertisingDealsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/advertisingDeals/sb';
    private const PATH_QUERY = '/adsApi/v1/query/advertisingDeals/sb';
    private const PATH_UPDATE = '/adsApi/v1/update/advertisingDeals/sb';
    private const PATH_DELETE = '/adsApi/v1/delete/advertisingDeals/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param array[] $advertisingDeals */
    public function create(array $advertisingDeals): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_CREATE,
            ['advertisingDeals' => $advertisingDeals],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    public function query(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $filters)->ensureSuccess();

        return $response->getData();
    }

    /** @param array[] $advertisingDeals */
    public function update(array $advertisingDeals): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_UPDATE,
            ['advertisingDeals' => $advertisingDeals],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    /** @param string[] $advertisingDealIds */
    public function delete(array $advertisingDealIds): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_DELETE,
            ['advertisingDealIds' => $advertisingDealIds],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
