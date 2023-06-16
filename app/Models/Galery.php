<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    public $primaryKey="galery_id";
    protected $table="galeries";
    public $timestamps = false;
    protected $fillable =[
       'title','desc','photo'
    ];
}
