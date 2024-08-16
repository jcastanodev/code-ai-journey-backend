<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'google_place_id',
        'name',
        'address',
        'latitude',
        'longitude',
    ];

    public function placeTypes()
    {
        return $this->belongsToMany(PlaceType::class);
    }

    public function routesFrom()
    {
        return $this->hasMany(Route::class, 'from_place_id');
    }

    public function routesTo()
    {
        return $this->hasMany(Route::class, 'to_place_id');
    }

    public function routesWaypoints()
    {
        return $this->belongsToMany(Route::class)->withPivot('order');
    }
}
