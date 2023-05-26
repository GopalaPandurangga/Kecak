<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    public $primaryKey="package_id";
    protected $table="pakets";
    public $timestamps = false;
    protected $fillable =[
        'package_id','name','rate','desc','location','photo'
    ];
}
