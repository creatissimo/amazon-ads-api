<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;

final class AdvertisingDealTargetsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/advertisingDealTargets/sb';
    private const PATH_QUERY = '/adsApi/v1/query/advertisingDealTargets/sb';
    private const PATH_DELETE = '/adsApi/v1/delete/advertisingDealTargets/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param array[] $advertisingDealTargets */
    public function create(array $advertisingDealTargets): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_CREATE,
            ['advertisingDealTargets' => $advertisingDealTargets],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    public function query(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $filters)->ensureSuccess();

        return $response->getData();
    }

    /** @param string[] $advertisingDealTargetIds */
    public function delete(array $advertisingDealTargetIds): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_DELETE,
            ['advertisingDealTargetIds' => $advertisingDealTargetIds],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
