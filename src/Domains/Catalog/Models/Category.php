<?php

namespace Domains\Catalog\Models;

use Database\Factories\CategoryFactory;
use Domains\Shared\Models\Concerns\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasKey;
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
        return new CategoryFactory();
    }
}
