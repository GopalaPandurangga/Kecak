<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $primaryKey="package_id";
    protected $table="packages";
    protected $fillable =[
        'package_code','package_name','package_desc','feature_image','location_id','community_id'
    ];
    public function comunity(){
        return $this->belongsTo(comunity::class,'comunity_id', 'comunity_id');
    }
}
