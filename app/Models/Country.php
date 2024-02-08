<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        // Add other fields as needed
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
