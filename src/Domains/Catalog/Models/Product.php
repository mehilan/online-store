<?php

namespace Domains\Catalog\Models;

use Database\Factories\ProductFactory;
use Domains\Catalog\Models\Builders\ProductBuilder;
use Domains\Shared\Models\Concerns\HasKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasKey;
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'description',
        'cost',
        'retail',
        'active',
        'vat',
        'category_id',
        'range_id'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function range()
    {
        return $this->belongsTo(Range::class, 'range_id');
    }

    public function newEloquentBuilder($query)
    {
        return new ProductBuilder($query);
    }

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
