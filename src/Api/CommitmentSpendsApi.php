<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;

final class CommitmentSpendsApi
{
    private const PATH_RETRIEVE = '/adsApi/v1/retrieve/commitmentSpends/dsp';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    public function retrieve(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_RETRIEVE, $filters)->ensureSuccess();

        return $response->getData();
    }
}
