<?php

namespace App;

use Illuminate\Support\Facades\Cache;
use Predis\Connection\ConnectionException;

trait CacheTrait
{
    public function cache($key, $callback, $expire = null, ?bool $useCache = false)
    {
        try {
            if (!$useCache) {
                return $callback;
            }
            return Cache::remember($key, $expire ?? config('cache.ttl'), $callback);
        } catch (ConnectionException $exception) {
            return $callback();
        }

    }
}
