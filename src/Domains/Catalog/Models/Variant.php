<?php

namespace Domains\Catalog\Models;

use Database\Factories\VariantFactory;
use Domains\Catalog\Models\Builders\VariantBuilder;
use Domains\Shared\Models\Concerns\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;
    use HasKey;

    protected $fillable = [
        //
        'key',
        'name',
        'cost',
        'retail',
        'height',
        'width',
        'length',
        'weight',
        'active',
        'shippable',
        'product_id'
    ];

    protected $casts = [
        'active' => 'boolean',
        'shippable' => 'boolean'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function newEloquentBuilder($query)
    {
        return new VariantBuilder($query);
    }

    protected static function newFactory()
    {
        return VariantFactory::new();
    }
}
