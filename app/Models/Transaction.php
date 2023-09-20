<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\TravelPackageController;

class Transaction extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'users_id', 'transaction_total', 'transaction_status'
    ];
    // 'tambahan_ket',
    protected $hidden = [
        
    ];

    public function details() {
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function travel_package() {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
