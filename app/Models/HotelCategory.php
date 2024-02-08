<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_name', 'hotel_description', ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'category_id');
    }
}
