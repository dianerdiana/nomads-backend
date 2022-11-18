<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Gallery;

class TravelPackage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id_travel_package';
    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language', 'foods', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [

    ];

    public function galleries() {
        return $this->hasMany(Gallery::class, 'travel_package_id', 'id_travel_package');
    }
}
