<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    
    use HasFactory;

    protected $filliable = ['name','city_id'];
    
    //unos a muchos (inversa)
    public function City(){
        return $this->belongsTo(City::class);
    }
    
   //relacion uno a uno
   public function Order(){ 
    return $this->hasOne(Order::class);
}

}
