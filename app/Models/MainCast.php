<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCast extends Model
{
    use HasFactory;
    public $primaryKey="maincast_id";
    protected $table="main_casts";
    public $timestamps = false;
    protected $fillable =[
       'title','desc','photo'
    ];
}
