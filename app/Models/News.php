<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $primaryKey="news_id";
    protected $table="news";
    public $timestamps = false;
    protected $fillable =[
       'title','desc','photo'
    ];
}
