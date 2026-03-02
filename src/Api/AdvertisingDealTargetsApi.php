<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealTargetCreate;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealTargetMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\SBAdvertisingDealTargetSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\SBQueryAdvertisingDealTargetRequest;

final class AdvertisingDealTargetsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/advertisingDealTargets/sb';
    private const PATH_QUERY = '/adsApi/v1/query/advertisingDealTargets/sb';
    private const PATH_DELETE = '/adsApi/v1/delete/advertisingDealTargets/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param SBAdvertisingDealTargetCreate[] $advertisingDealTargets */
    public function create(array $advertisingDealTargets): SBAdvertisingDealTargetMultiStatusResponse
    {
        $body = [
            'advertisingDealTargets' => array_map(
                static fn(SBAdvertisingDealTargetCreate $t) => $t->toArray(),
                $advertisingDealTargets,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return SBAdvertisingDealTargetMultiStatusResponse::fromArray($response->getData());
    }

    public function query(SBQueryAdvertisingDealTargetRequest $request): SBAdvertisingDealTargetSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return SBAdvertisingDealTargetSuccessResponse::fromArray($response->getData());
    }

    /** @param string[] $advertisingDealTargetIds */
    public function delete(array $advertisingDealTargetIds): SBAdvertisingDealTargetMultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_DELETE,
            ['advertisingDealTargetIds' => $advertisingDealTargetIds],
        )->ensureMultiStatus();

        return SBAdvertisingDealTargetMultiStatusResponse::fromArray($response->getData());
    }
}
