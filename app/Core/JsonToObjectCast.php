<?php 
namespace App\Core;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class JsonToObjectCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return json_decode($value ?? '{}');
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value);
    }
}
