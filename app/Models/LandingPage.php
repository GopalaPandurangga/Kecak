<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;
    public $primaryKey="landingpages_id";
    protected $table="landing_pages";
    protected $fillable =[
        'landingpages_id','title','desc','photo'
    ];
    
}
