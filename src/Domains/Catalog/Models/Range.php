<?php

namespace Domains\Catalog\Models;

use Database\Factories\RangeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    use HasFactory;

        /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'key',
        'name',
        'description',
        'active'
    ];

    protected function casts()
    {
        return [
            'active' => 'boolean'
        ];
    }


    /***
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

    protected function newFactory()
    {
        return new RangeFactory();
    }
}
