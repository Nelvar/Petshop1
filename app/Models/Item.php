<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   
   
   use HasFactory;

   protected $guarded = ['id','create_at','updated_at'];
 
   public function Order(){
    return $this->belongsToMany(Order::class);
 } 

public function Image(){
   return $this->morphOne(Image::class, 'Imageable');
}

}
