<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\DSPCommitmentCreate;
use Creatissimo\AmazonAdsApi\Model\DSPCommitmentMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\DSPCommitmentSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\DSPCommitmentUpdate;
use Creatissimo\AmazonAdsApi\Model\DSPRetrieveCommitmentRequest;

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

    /** @param DSPCommitmentCreate[] $commitments */
    public function create(array $commitments): DSPCommitmentMultiStatusResponse
    {
        $body = [
            'commitments' => array_map(
                static fn(DSPCommitmentCreate $c) => $c->toArray(),
                $commitments,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return DSPCommitmentMultiStatusResponse::fromArray($response->getData());
    }

    public function list(?string $nextToken = null, ?int $maxResults = null): DSPCommitmentSuccessResponse
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

        return DSPCommitmentSuccessResponse::fromArray($response->getData());
    }

    public function retrieve(DSPRetrieveCommitmentRequest $request): DSPCommitmentMultiStatusResponse
    {
        $response = $this->httpClient->post(self::PATH_RETRIEVE, $request->toArray())->ensureMultiStatus();

        return DSPCommitmentMultiStatusResponse::fromArray($response->getData());
    }

    /** @param DSPCommitmentUpdate[] $commitments */
    public function update(array $commitments): DSPCommitmentMultiStatusResponse
    {
        $body = [
            'commitments' => array_map(
                static fn(DSPCommitmentUpdate $c) => $c->toArray(),
                $commitments,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return DSPCommitmentMultiStatusResponse::fromArray($response->getData());
    }
}
