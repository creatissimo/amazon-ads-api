<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Api;

use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\AdAssociationCreate;
use Creatissimo\AmazonAdsApi\Model\AdAssociationMultiStatusResponse;
use Creatissimo\AmazonAdsApi\Model\AdAssociationSuccessResponse;
use Creatissimo\AmazonAdsApi\Model\AdAssociationUpdate;
use Creatissimo\AmazonAdsApi\Model\QueryAdAssociationRequest;

final class AdAssociationsApi
{
    private const PATH_CREATE = '/adsApi/v1/create/adAssociations';
    private const PATH_QUERY = '/adsApi/v1/query/adAssociations';
    private const PATH_UPDATE = '/adsApi/v1/update/adAssociations';
    private const PATH_DELETE = '/adsApi/v1/delete/adAssociations';

    public function __construct(
        private readonly HttpClient $httpClient,
    ) {
    }

    /** @param AdAssociationCreate[] $adAssociations */
    public function create(array $adAssociations): AdAssociationMultiStatusResponse
    {
        $body = [
            'adAssociations' => array_map(
                static fn(AdAssociationCreate $a) => $a->toArray(),
                $adAssociations,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_CREATE, $body)->ensureMultiStatus();

        return AdAssociationMultiStatusResponse::fromArray($response->getData());
    }

    public function query(QueryAdAssociationRequest $request): AdAssociationSuccessResponse
    {
        $response = $this->httpClient->post(self::PATH_QUERY, $request->toArray())->ensureSuccess();

        return AdAssociationSuccessResponse::fromArray($response->getData());
    }

    /** @param AdAssociationUpdate[] $adAssociations */
    public function update(array $adAssociations): AdAssociationMultiStatusResponse
    {
        $body = [
            'adAssociations' => array_map(
                static fn(AdAssociationUpdate $a) => $a->toArray(),
                $adAssociations,
            ),
        ];

        $response = $this->httpClient->post(self::PATH_UPDATE, $body)->ensureMultiStatus();

        return AdAssociationMultiStatusResponse::fromArray($response->getData());
    }

    /** @param string[] $adAssociationIds */
    public function delete(array $adAssociationIds): AdAssociationMultiStatusResponse
    {
        $response = $this->httpClient->post(self::PATH_DELETE, ['adAssociationIds' => $adAssociationIds])->ensureMultiStatus();

        return AdAssociationMultiStatusResponse::fromArray($response->getData());
    }
}
