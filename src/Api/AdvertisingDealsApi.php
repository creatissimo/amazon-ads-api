<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealCreate;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealUpdate;
use Creatissimo\AmazonAdsApi\Model\SBQueryAdvertisingDealRequest;

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

    /** @param SBAdvertisingDealCreate[] $advertisingDeals */
    public function create(array $advertisingDeals): SBAdvertisingDealMultiStatusResponse
    {
        $body = [
            'advertisingDeals' => array_map(
                static fn(SBAdvertisingDealCreate $d) => $d->toArray(),
                $advertisingDeals,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return SBAdvertisingDealMultiStatusResponse::fromArray($response->getData());
    }

    public function query(SBQueryAdvertisingDealRequest $request): SBAdvertisingDealSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return SBAdvertisingDealSuccessResponse::fromArray($response->getData());
    }

    /** @param SBAdvertisingDealUpdate[] $advertisingDeals */
    public function update(array $advertisingDeals): SBAdvertisingDealMultiStatusResponse
    {
        $body = [
            'advertisingDeals' => array_map(
                static fn(SBAdvertisingDealUpdate $d) => $d->toArray(),
                $advertisingDeals,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return SBAdvertisingDealMultiStatusResponse::fromArray($response->getData());
    }

    /** @param string[] $advertisingDealIds */
    public function delete(array $advertisingDealIds): SBAdvertisingDealMultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_DELETE,
            ['advertisingDealIds' => $advertisingDealIds],
        )->ensureMultiStatus();

        return SBAdvertisingDealMultiStatusResponse::fromArray($response->getData());
    }
}
