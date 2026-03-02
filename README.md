# creatissimo/amazon-ads-api

Lightweight PHP 8.3 HTTP client for the [Amazon Advertising API](https://advertising.amazon.com/API/docs/en-us/guides/get-started/overview). Covers OAuth 2.0 authentication, typed request/response models, automatic token refresh, retry with exponential backoff, and optional access-token caching.

## Features

- **OAuth 2.0** — authorization code exchange, token refresh, pluggable token cache (`FileTokenCache` included)
- **Typed models** — enums, DTOs with getters/setters, `toArray()` / `fromArray()` serialization
- **Full endpoint coverage** — Campaigns, Ad Groups, Ads, Targets, Ad Associations, Ad Extensions, Advertising Deals, Brand Stores, Commitments, Recommendations, and more
- **Retry logic** — automatic retry with exponential backoff on `429` / `504`; token refresh and retry on `401`
- **API exceptions** — `AmazonAdsApiException` with HTTP status code, response error code, and message
- **Multi-region** — NA, EU, FE base URLs

## Requirements

- PHP ≥ 8.3
- ext-curl
- ext-json

## Installation

```bash
composer require creatissimo/amazon-ads-api
```

## Quick start

```php
use Creatissimo\AmazonAdsApi\Auth\FileTokenCache;
use Creatissimo\AmazonAdsApi\Auth\OAuthClient;
use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Api\CampaignsApi;
use Creatissimo\AmazonAdsApi\Model\AdProduct;
use Creatissimo\AmazonAdsApi\Model\CampaignAdProductFilter;
use Creatissimo\AmazonAdsApi\Model\QueryCampaignRequest;

$oauth = new OAuthClient(
    clientId: 'amzn1.application-oa2-client.xxx',
    clientSecret: 'your-secret',
    redirectUri: 'https://your-app.com/callback',
    tokenCache: new FileTokenCache('/tmp/amazon-ads-tokens'),
);

$oauth->setTokens(
    accessToken: 'placeholder',
    refreshToken: 'Atzr|...',
    expiresAt: 0,
);

$http = new HttpClient(
    oauthClient: $oauth,
    clientId: 'amzn1.application-oa2-client.xxx',
    baseUrl: HttpClient::REGION_EU,
    profileId: '123456789',
);

$campaigns = new CampaignsApi($http);

$response = $campaigns->query(new QueryCampaignRequest(
    adProductFilter: new CampaignAdProductFilter(
        include: [AdProduct::SPONSORED_PRODUCTS],
    ),
    maxResults: 10,
));

foreach ($response->getCampaigns() as $campaign) {
    echo $campaign->getName() . PHP_EOL;
}
```

## Available API classes

| Class | Operations |
|---|---|
| `CampaignsApi` | create, query, update, delete |
| `AdGroupsApi` | create, query, update, delete |
| `AdsApi` | create, query, update, delete |
| `TargetsApi` | create, query, update, delete |
| `AdAssociationsApi` | create, query, update, delete |
| `AdExtensionsApi` | create, query, update |
| `AdvertisingDealsApi` | create, query, update, delete |
| `AdvertisingDealTargetsApi` | create, query, delete |
| `BrandStoresApi` | queryStores, queryPages, queryEditionPublishVersions, updateEditionPublishVersions, listEditions |
| `CommitmentsApi` | create, list, retrieve, update |
| `CommitmentSpendsApi` | retrieve |
| `CampaignForecastsApi` | retrieve |
| `RecommendationsApi` | create, queryTypes |
| `BrandedKeywordsPricingsApi` | create |
| `KeywordReservationValidationsApi` | create |

## Token caching

Pass any `TokenCacheInterface` implementation to `OAuthClient`. A file-based cache is included:

```php
$cache = new FileTokenCache(__DIR__ . '/var/cache/tokens');

$oauth = new OAuthClient(
    clientId: '...',
    clientSecret: '...',
    redirectUri: '...',
    tokenCache: $cache,
);
```

Implement `TokenCacheInterface` for Redis, Memcached, database, or PSR-16 adapters.

## Error handling

All API methods throw `AmazonAdsApiException` on non-success responses:

```php
use Creatissimo\AmazonAdsApi\Http\AmazonAdsApiException;

try {
    $campaigns->query($request);
} catch (AmazonAdsApiException $e) {
    $e->getHttpStatusCode();  // 400, 401, 403, ...
    $e->getResponseCode();    // "INVALID_ARGUMENT", ...
    $e->getResponseMessage(); // "Missing required field"
    $e->getResponseBody();    // full response array
}
```

## Retry behaviour

The HTTP client automatically retries on `429` (Too Many Requests) and `504` (Gateway Timeout) with exponential backoff. On `401` (Unauthorized) it refreshes the access token once and retries. Both `maxRetries` and `retryBaseDelay` are configurable:

```php
$http = new HttpClient(
    oauthClient: $oauth,
    clientId: '...',
    maxRetries: 5,
    retryBaseDelay: 2.0, // seconds; delays: 2, 4, 8, 16, 32
);
```

## Project structure

```
src/
├── Api/            # one class per API resource
├── Auth/           # OAuth client, token cache interface + file impl
├── Http/           # HttpClient, ApiResponse, AmazonAdsApiException
├── Model/          # enums, DTOs, query/create/update request models
└── example.php     # runnable usage example
```

## License

Unlicense
