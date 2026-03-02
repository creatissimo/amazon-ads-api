<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;

final class CommitmentsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/commitments/dsp';
    private const PATH_LIST = '/adsApi/v1/commitments/dsp';
    private const PATH_RETRIEVE = '/adsApi/v1/retrieve/commitments/dsp';
    private const PATH_UPDATE = '/adsApi/v1/update/commitments/dsp';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param array[] $commitments */
    public function create(array $commitments): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_CREATE,
            ['commitments' => $commitments],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    public function list(?string $nextToken = null, ?int $maxResults = null): array
    {
        $query = [];

        if ($nextToken !== null) {
            $query[] = 'nextToken=' . urlencode($nextToken);
        }
        if ($maxResults !== null) {
            $query[] = 'maxResults=' . $maxResults;
        }

        $path = self::PATH_LIST;

        if ($query !== []) {
            $path .= '?' . implode('&', $query);
        }

        $response = $this->httpClient->get($path)->ensureSuccess();

        return $response->getData();
    }

    public function retrieve(array $filters): array
    {
        $response = $this->httpClient->post(self::PATH_RETRIEVE, $filters)->ensureSuccess();

        return $response->getData();
    }

    /** @param array[] $commitments */
    public function update(array $commitments): MultiStatusResponse
    {
        $response = $this->httpClient->post(
            self::PATH_UPDATE,
            ['commitments' => $commitments],
        )->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
