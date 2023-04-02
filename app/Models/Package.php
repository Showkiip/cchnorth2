<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;


    public function packageType()
    {
        return $this->belongsTo(PackageType::class, 'package_type_id', 'id')->where('is_active', 1);
    }

    public function packageCategory()
    {
        return $this->belongsTo(PackageCategory::class, 'package_category_id', 'id')->where('is_active', 1);
    }

    public function packageitinerary()
    {
        return $this->hasOne(PackageItinerary::class);
    }
}
