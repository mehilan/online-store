<?php

namespace Domains\Catalog\Models;

use Database\Factories\ProductFactory;
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

    public function Categories()
    {
        return $this->hasMany(Category::class);
    }

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
