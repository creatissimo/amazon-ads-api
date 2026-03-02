<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Creatissimo\AmazonAdsApi\Api\AdsApi;
use Creatissimo\AmazonAdsApi\Api\AdGroupsApi;
use Creatissimo\AmazonAdsApi\Api\CampaignsApi;
use Creatissimo\AmazonAdsApi\Api\TargetsApi;
use Creatissimo\AmazonAdsApi\Auth\FileTokenCache;
use Creatissimo\AmazonAdsApi\Auth\OAuthClient;
use Creatissimo\AmazonAdsApi\Http\AmazonAdsApiException;
use Creatissimo\AmazonAdsApi\Http\HttpClient;
use Creatissimo\AmazonAdsApi\Model\AdProduct;
use Creatissimo\AmazonAdsApi\Model\CampaignAdProductFilter;
use Creatissimo\AmazonAdsApi\Model\CampaignStateFilter;
use Creatissimo\AmazonAdsApi\Model\EnumIncludeFilter;
use Creatissimo\AmazonAdsApi\Model\QueryAdGroupRequest;
use Creatissimo\AmazonAdsApi\Model\QueryAdRequest;
use Creatissimo\AmazonAdsApi\Model\QueryCampaignRequest;
use Creatissimo\AmazonAdsApi\Model\QueryTargetRequest;
use Creatissimo\AmazonAdsApi\Model\State;

$clientId     = '';
$clientSecret = '';
$refreshToken = '';
$profileId    = '';

$tokenCache = new FileTokenCache(__DIR__ . '/../var/cache/tokens');

$oauth = new OAuthClient(
    clientId: $clientId,
    clientSecret: $clientSecret,
    redirectUri: 'https://your-app.com/callback',
    tokenCache: $tokenCache,
);

$oauth->setTokens(
    accessToken: 'placeholder',
    refreshToken: $refreshToken,
    expiresAt: 0,
);

$httpClient = new HttpClient(
    oauthClient: $oauth,
    clientId: $clientId,
    baseUrl: HttpClient::REGION_NA,
    profileId: $profileId,
);

$campaignsApi = new CampaignsApi($httpClient);
$adGroupsApi  = new AdGroupsApi($httpClient);
$adsApi       = new AdsApi($httpClient);
$targetsApi   = new TargetsApi($httpClient);

try {
    $campaignResponse = $campaignsApi->query(new QueryCampaignRequest(
        adProductFilter: new CampaignAdProductFilter(
            include: [AdProduct::SPONSORED_PRODUCTS],
        ),
        stateFilter: new CampaignStateFilter(
            include: [State::ENABLED],
        ),
        maxResults: 10,
    ));

    echo "Found " . count($campaignResponse->getCampaigns()) . " campaigns:\n";

    foreach ($campaignResponse->getCampaigns() as $campaign) {
        echo sprintf(
            "  [%s] %s (state: %s, product: %s)\n",
            $campaign->getCampaignId(),
            $campaign->getName(),
            $campaign->getState()->value,
            $campaign->getAdProduct()->value,
        );
    }

    $adGroupResponse = $adGroupsApi->query(new QueryAdGroupRequest(
        adProductFilter: new EnumIncludeFilter([AdProduct::SPONSORED_PRODUCTS]),
        stateFilter: new EnumIncludeFilter([State::ENABLED]),
        maxResults: 10,
    ));

    echo "\nFound " . count($adGroupResponse->getAdGroups()) . " ad groups:\n";

    foreach ($adGroupResponse->getAdGroups() as $adGroup) {
        echo sprintf(
            "  [%s] %s (campaign: %s)\n",
            $adGroup->getAdGroupId(),
            $adGroup->getName(),
            $adGroup->getCampaignId(),
        );
    }

    $adResponse = $adsApi->query(new QueryAdRequest(
        adProductFilter: new EnumIncludeFilter([AdProduct::SPONSORED_PRODUCTS]),
        maxResults: 5,
    ));

    echo "\nFound " . count($adResponse->getAds()) . " ads:\n";

    foreach ($adResponse->getAds() as $ad) {
        echo sprintf(
            "  [%s] %s (type: %s)\n",
            $ad->getAdId(),
            $ad->getName() ?? '(unnamed)',
            $ad->getAdType()->value,
        );
    }

    $targetResponse = $targetsApi->query(new QueryTargetRequest(
        adProductFilter: new EnumIncludeFilter([AdProduct::SPONSORED_PRODUCTS]),
        maxResults: 5,
    ));

    echo "\nFound " . count($targetResponse->getTargets()) . " targets:\n";

    foreach ($targetResponse->getTargets() as $target) {
        echo sprintf(
            "  [%s] type: %s, negative: %s\n",
            $target->getTargetId(),
            $target->getTargetType(),
            $target->isNegative() ? 'yes' : 'no',
        );
    }
} catch (AmazonAdsApiException $e) {
    echo "API Error: {$e->getMessage()}\n";
    echo "  HTTP Status: {$e->getHttpStatusCode()}\n";
    echo "  Response Code: {$e->getResponseCode()}\n";
    echo "  Response Message: {$e->getResponseMessage()}\n";
}
