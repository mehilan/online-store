<?php

namespace Domains\Customer\Models;


use Database\Factories\LocationFactory;
use Domains\Shared\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    use HasUUid;

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

  

     protected static function newFactory()
    {
        return new LocationFactory();
    }

}
