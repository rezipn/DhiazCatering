<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\TravelPackageController;

class TravelPackage extends Model
{
    use HasFactory;
    
    use SoftDeletes;

    protected $fillable = [
        'title','slug','location','about','keterangan','departure_date','duration','type','price'
    ];

    protected $hidden = [
        
    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id'); 
    }

}
