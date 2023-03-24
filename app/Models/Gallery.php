<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\TravelPackageController;

class gallery extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id','image',
    ];

    protected $hidden = [
        
    ];

    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

}
