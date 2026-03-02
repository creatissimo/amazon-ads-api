<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;

final class KeywordReservationValidationsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/keywordReservationValidations/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param array[] $keywordReservationValidations */
    public function create(array $keywordReservationValidations): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_CREATE,
            ['keywordReservationValidations' => $keywordReservationValidations],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
