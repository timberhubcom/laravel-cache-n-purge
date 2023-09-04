<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CacheableModel extends Model
{
    public ?array $tags;

    // function that on save, will clear the cache for the model
    public function clearCache() {
        Cache::tags($this->tags)->flush();
    }
}