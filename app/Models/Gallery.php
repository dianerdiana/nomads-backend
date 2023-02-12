<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TravelPackage;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['travel_package_id', 'image'];

    protected $hidden = [];

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id');
    }
}
