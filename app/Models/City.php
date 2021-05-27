<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $filliable = ['name','department_id'];

    //relacion uno a muchos inversa
 public function Department(){
    return $this->belongsTo(Department::class);
    }

    //relacion uno a muchos
    public function Districts(){
        return $this->hasMany(District::class);
    }
    //relacion uno a uno
    public function Order(){ 
        return $this->hasOne(Order::class);
    }

}
