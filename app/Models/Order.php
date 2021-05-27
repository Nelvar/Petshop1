<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   
   
   use HasFactory;

   protected $guarded = ['id','create_at','updated_at','status'];

   const PENDIENTE= 1;
   const RECIBIDO= 2;
   const ENVIADO = 3;
   const ENTREGADO = 4;
   const ANULADO = 5;

 //relacion un a muchos inversa
 public function User(){
    return $this->belongsTo(User::class);  
 }

//relacion uno a uno inversa 
 
public function Department(){
   return $this->belongsTo(Department::class);  
}
public function City(){
   return $this->belongsTo(User::class);  
}
public function district(){
   return $this->belongsTo(District::class);  
   }
}
