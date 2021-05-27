<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $filleable = ['name','slug','image','icon'];
    //relacion uno a muchos

    public function Subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    
    //relacion muchos a muchos
    public function Brands(){
        return $this-> BelongsToMany(Brand::class);
    }

    public function Product(){
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }
}