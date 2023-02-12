<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Transaction;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transaction_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [];

    public function travel_package()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
