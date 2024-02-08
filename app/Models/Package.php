<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_name',
        'package_place',
        'image_path',
        'package_duration',
        'package_price',
        'package_category_id',
    ];

    // Define the relationship with PackageCategory
    public function category()
    {
        return $this->belongsTo(PackageCategory::class, 'package_category_id');
    }
}
