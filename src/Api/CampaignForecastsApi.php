<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\DSPCampaignForecastMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\DSPRetrieveCampaignForecastRequest;

final class CampaignForecastsApi
{
    private const PATH_RETRIEVE = '/adsApi/v1/retrieve/campaignForecasts/dsp';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    public function retrieve(DSPRetrieveCampaignForecastRequest $request): DSPCampaignForecastMultiStatusResponse
    {
        $response = $this->httpClient->post(self::PATH_RETRIEVE, $request->toArray())->ensureMultiStatus();

        return DSPCampaignForecastMultiStatusResponse::fromArray($response->getData());
    }
}
