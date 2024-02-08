<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'facility',
        'address',
        'country_id',
        'state_id',
        'city',
        'zip',
        'contact_number',
        'email',
        'check_in',
        'check_out',
    ];


    public function category()
    {
        return $this->belongsTo(HotelCategory::class, 'category_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

   
}
