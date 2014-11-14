<?php

if (Config::get('api-guard::generateApiKeyRoute')) {
    Route::post('apiguard/api_key', 'Awalko\ApiGuard\ApiKeyController@create');
}
