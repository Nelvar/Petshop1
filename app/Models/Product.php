<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = ['id','create_at', 'updated_at'];
    
    //relacion uno a muchos inversa
    public function Subcategory(){
        return $this-> belongsTo(Subcategory::class);
    }
     
    public function Brand(){
        return $this->belongsTo(Brand::class);
    }
    //relacion uno a muchos
    public function Sizes(){
        return $this ->hasMany(Size::class);
    }

    //relacion muchos a muchos

    public function Colors(){
        return $this ->belongsToMany(Color::class);
    }

    //relacion uno a muchos polimorfica

    public function Images(){
    return $this->morphMany(Image::class,'imageable');
    }   

}