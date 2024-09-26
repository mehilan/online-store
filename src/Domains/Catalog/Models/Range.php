<?php

namespace Domains\Catalog\Models;

use Database\Factories\RangeFactory;
use Domains\Catalog\Models\Builders\RangeBuilder;
use Domains\Shared\Models\Concerns\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    use HasFactory;
    use HasKey;

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

    public function products()
    {
        return $this->hasMany(Product::class, 'range_id');
    }

    public function newEloquentBuilder($query)
    {
        return new RangeBuilder($query);
    }


    /***
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

    protected static function newFactory()
    {
        return RangeFactory::new();
    }
}
