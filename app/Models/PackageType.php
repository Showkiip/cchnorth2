<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    use HasFactory;

    protected $fillable = ['package_name','package_category_id'];

    public function packageCategory()
    {
        return $this->belongsTo(PackageCategory::class, 'package_category_id','id');
    }
}
