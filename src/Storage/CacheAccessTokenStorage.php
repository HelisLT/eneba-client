<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Storage;

use DateTime;
use Psr\Cache\CacheItemPoolInterface;

class CacheAccessTokenStorage implements AccessTokenStorageInterface
{
    private const ITEM_KEY = 'eneba_auth_token';

    private $cache;

    public function __construct(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
    }

    public function get(): ?string
    {
        return $this->cache->getItem(self::ITEM_KEY)->get();
    }

    public function set(string $accessToken, DateTime $expiresAt): void
    {
        $cacheItem = $this->cache->getItem(self::ITEM_KEY);
        $cacheItem->set($accessToken);
        $cacheItem->expiresAt($expiresAt);
        $this->cache->save($cacheItem);
    }
}
