<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'name',
        'code',
        // Add other fields as needed
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
