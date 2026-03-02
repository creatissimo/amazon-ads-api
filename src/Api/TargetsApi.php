<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\MultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\QueryTargetRequest;
use Creatissimo\AmazonAdsApi\Model\TargetCreate;
use Creatissimo\AmazonAdsApi\Model\TargetSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\TargetUpdate;

final class TargetsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/targets';
    private const PATH_QUERY = '/adsApi/v1/query/targets';
    private const PATH_UPDATE = '/adsApi/v1/update/targets';
    private const PATH_DELETE = '/adsApi/v1/delete/targets';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param TargetCreate[] $targets */
    public function create(array $targets): MultiStatusResponse
    {
        $body = [
            'targets' => array_map(
                static fn(TargetCreate $t) => $t->toArray(),
                $targets,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    public function query(QueryTargetRequest $request): TargetSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return TargetSuccessResponse::fromArray($response->getData());
    }

    /** @param TargetUpdate[] $targets */
    public function update(array $targets): MultiStatusResponse
    {
        $body = [
            'targets' => array_map(
                static fn(TargetUpdate $t) => $t->toArray(),
                $targets,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }

    /** @param string[] $targetIds */
    public function delete(array $targetIds): MultiStatusResponse
    {
        $response = $this->httpClient->post(self::PATH_DELETE, ['targetIds' => $targetIds])->ensureMultiStatus();

        return MultiStatusResponse::fromArray($response->getData());
    }
}
