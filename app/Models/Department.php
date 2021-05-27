<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
    use HasFactory;

    protected $filliable = ['name'];
    
    //relacion uno a muchos
    public function City(){
        
        return $this->HasMany('App\Models\City');
    }

    //relacion uno a uno
    public function Order(){ 
        return $this->hasOne(Order::class);
    }
}
