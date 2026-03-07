<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\CampaignCreate;
use Creatissimo\AmazonAdsApi\Model\CampaignMultiStatusResponseWithPartialErrors;
use Creatissimo\AmazonAdsApi\Model\CampaignSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\CampaignUpdate;
use Creatissimo\AmazonAdsApi\Model\QueryCampaignRequest;

final class CampaignsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/campaigns';
    private const PATH_QUERY = '/adsApi/v1/query/campaigns';
    private const PATH_UPDATE = '/adsApi/v1/update/campaigns';
    private const PATH_DELETE = '/adsApi/v1/delete/campaigns';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param CampaignCreate[] $campaigns */
    public function create(array $campaigns): CampaignMultiStatusResponseWithPartialErrors
    {
        $body = [
            'campaigns' => array_map(
                static fn(CampaignCreate $c) => $c->toArray(),
                $campaigns,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return CampaignMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }

    public function query(QueryCampaignRequest $request): CampaignSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return CampaignSuccessResponse::fromArray($response->getData());
    }

    /** @param CampaignUpdate[] $campaigns */
    public function update(array $campaigns): CampaignMultiStatusResponseWithPartialErrors
    {
        $body = [
            'campaigns' => array_map(
                static fn(CampaignUpdate $c) => $c->toArray(),
                $campaigns,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return CampaignMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }

    /** @param string[] $campaignIds */
    public function delete(array $campaignIds): CampaignMultiStatusResponseWithPartialErrors
    {
        $response = $this->httpClient->post(self::PATH_DELETE, ['campaignIds' => $campaignIds])->ensureMultiStatus();

        return CampaignMultiStatusResponseWithPartialErrors::fromArray($response->getData());
    }
}
