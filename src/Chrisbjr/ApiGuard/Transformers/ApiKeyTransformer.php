<?php

namespace Awalko\ApiGuard\Transformers;

use Awalko\ApiGuard\ApiKey;
use League\Fractal\TransformerAbstract;

class ApiKeyTransformer extends TransformerAbstract
{

    public function transform(ApiKey $apiKey)
    {
        return [
            'id'            => $apiKey->id,
            'user_id'       => $apiKey->user_id,
            'key'           => $apiKey->key,
            'level'         => $apiKey->level,
            'ignore_limits' => $apiKey->ignore_limits,
            'created_at'    => $apiKey->created_at,
            'updated_at'    => $apiKey->updated_at,
        ];
    }

}
