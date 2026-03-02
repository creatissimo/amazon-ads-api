<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\SBKeywordReservationValidationCreate;
use Creatissimo\AmazonAdsApi\Model\SBKeywordReservationValidationMultiStatusResponse;

final class KeywordReservationValidationsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/keywordReservationValidations/sb';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param SBKeywordReservationValidationCreate[] $keywordReservationValidations */
    public function create(array $keywordReservationValidations): SBKeywordReservationValidationMultiStatusResponse
    {
        $body = [
            'keywordReservationValidations' => array_map(
                static fn(SBKeywordReservationValidationCreate $v) => $v->toArray(),
                $keywordReservationValidations,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return SBKeywordReservationValidationMultiStatusResponse::fromArray($response->getData());
    }
}
