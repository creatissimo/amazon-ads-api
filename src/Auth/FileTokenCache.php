<?php

declare(strict_types=1);

namespace Creatissimo\AmazonAdsApi\Auth;

use RuntimeException;

final class FileTokenCache implements TokenCacheInterface
{
    public function __construct(
        private readonly string $directory,
    ) {
        if (!is_dir($this->directory) && !mkdir($this->directory, 0755, true)) {
            throw new RuntimeException("Unable to create cache directory: {$this->directory}");
        }
    }

    public function get(string $key): ?array
    {
        $path = $this->path($key);

        if (!file_exists($path)) {
            return null;
        }

        $raw = file_get_contents($path);

        if ($raw === false) {
            return null;
        }

        $entry = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);

        if (!is_array($entry) || !isset($entry['expires_at'], $entry['tokens'])) {
            $this->delete($key);

            return null;
        }

        if (time() >= $entry['expires_at']) {
            $this->delete($key);

            return null;
        }

        return $entry['tokens'];
    }

    public function set(string $key, array $tokens, int $ttl): void
    {
        $entry = [
            'expires_at' => time() + $ttl,
            'tokens' => $tokens,
        ];

        $json = json_encode($entry, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT);

        file_put_contents($this->path($key), $json, LOCK_EX);
    }

    public function delete(string $key): void
    {
        $path = $this->path($key);

        if (file_exists($path)) {
            unlink($path);
        }
    }

    private function path(string $key): string
    {
        return $this->directory . '/' . sha1($key) . '.json';
    }
}

