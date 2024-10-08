<?php

namespace  Domains\Shared\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(fn (Model $model) => $model->uuid = Str::uuid()->toString());
    }
}
