<?php

namespace Timberhub\CacheNPurge;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class CacheableModel extends Model {
    // function that on save, will clear the cache for the model
    public function clearCache() {
        Cache::tags($this->getTags())->flush();
    }
}