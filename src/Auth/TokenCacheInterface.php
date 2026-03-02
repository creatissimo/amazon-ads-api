<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Auth;

interface TokenCacheInterface
{
    public function get(string $key): ?array;

    public function set(string $key, array $tokens, int $ttl): void;

    public function delete(string $key): void;
}

