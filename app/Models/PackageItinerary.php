<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageItinerary extends Model
{
    use HasFactory;

    public function packageItineraryImage()
    {
        return $this->hasMany(PackageItineraryImage::class,'package_itinerary_id','id');
    }
}
