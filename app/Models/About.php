<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public $primaryKey="about_id";
    protected $table="abouts";
    public $timestamps = false;
    protected $fillable =[
        'about_id','title','desc','sub_desc','photo'
    ];
}
