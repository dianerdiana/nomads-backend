<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id_gallery';
    protected $fillable = ['travel_package_id', 'image'];

    protected $hidden = [

    ];

    public function travel_package() {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id', 'id_travel_package');
    }

    public function getAllData($attr='') {
        $query = Gallery::query();

        if (!empty($attr)) {
            $query = $query->with($attr); 
        }

        $data = $query->get();
        return $data;
    }

    public function getData($id = '', $attr = '') {
        $query = Gallery::query();

        if (!empty($attr)) {
            $query = $query->with($attr);
        }

        $data = $query->findOrFail($id);
        return $data;
    }

    public function insertData($param=[]) {
        Gallery::create($param);
        $lastId = DB::getPdo()->lastInsertId();
        return $lastId;
    }

    public function updateData($id='', $param=[]) {
        $data = Gallery::findOrFail($id);
        $update = $data->update($param);
        return ($update > 0) ? true : false;
    }

    public function updateStatus($id='') {
        $data = Gallery::where($this->primaryKey,$id)->first();
        $is_active = $data->is_active ? false : true;
        $data->is_active = $is_active;
        $update = $data->update();
        return ($update>0)?true:false;
    }

    public function deleteData($id='') {
        $item = Gallery::findOrFail($id);
        $delete = $item->delete();
        return ($delete > 0) ? true : false;
    }
}
