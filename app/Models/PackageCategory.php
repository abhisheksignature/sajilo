<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    use HasFactory;

    
    //protected $fillable = ['tour_name', 'tour_place', 'tour_description','image_path'];
    protected $fillable = ['id', 'tour_name', 'tour_place', 'tour_description','image_path'];

    public function packages()
    {
        return $this->hasMany(Package::class, 'package_category_id');
    }

    public function getPackageCountAttribute()
    {
        return $this->packages->count();
    }

    public function getTotalDaysAttribute()
    {
        return $this->packages->sum('package_duration');
    }
}
