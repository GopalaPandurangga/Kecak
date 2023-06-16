<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowList extends Model
{
    use HasFactory;
    public $primaryKey="show_id";
    protected $table="show_lists";
   
    protected $fillable =[
       'name','rate','desc','location','photo'
    ];
}
