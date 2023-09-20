<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\TravelPackageController;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'nomor', 'alamat', 'booking'
    ];
    // 'doe_passport','tambahan' 
    protected $hidden = [
        
    ];

    public function transaction() {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

}
