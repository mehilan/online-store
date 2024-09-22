<?php

namespace Domains\Customer\Models;


use Database\Factories\LocationFactory;
use Domains\Customer\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    use HasUuid;

    protected $fillable = [
        'uuid',
        'house',
        'street',
        'parish',
        'ward',
        'district',
        'country',
        'postcode'
    ];


    public function addresses()
    {
        return $this->hasMany(Address::class, 'location_id');
    }

    /***
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */

     protected static function newFactory()
    {
            return new LocationFactory();
    }

}
