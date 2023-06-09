<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paket;

class TicketOrder extends Model
{
    use HasFactory;
    public $primaryKey="ticket_id";
    protected $table="ticket_orders";
    public $timestamps = false;
    protected $fillable =[
        'nama_pemesan','name','quantity','rate'
    ];
    public function paket()
    {
        return $this->belongsTo(Paket::class);
      
    }

}
