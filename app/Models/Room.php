<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'hotel_id',
        'name',
        'price',
        'description',
        'image',
        'aminity_id',
        'inclusion_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function category()
    {
        return $this->belongsTo(RoomCategory::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(RoomAmenity::class);
    }

    public function inclusions()
    {
        return $this->belongsToMany(RoomInclusion::class);
    }
}
