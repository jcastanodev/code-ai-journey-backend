<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_place_id',
        'to_place_id',
    ];

    public function fromPlace()
    {
        return $this->belongsTo(Place::class, 'from_place_id');
    }

    public function toPlace()
    {
        return $this->belongsTo(Place::class, 'to_place_id');
    }

    public function waypoints()
    {
        return $this->belongsToMany(Place::class)->withPivot('order')->orderBy('order');
    }
}
