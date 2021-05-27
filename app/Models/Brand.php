<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $filliable = ['name'];
    //relacion uno a muchos

    public function Products(){
        return $this-> hasMany(Product::class);
    }

    //RELACION MUCHOS A MUCHOS

    public function Categories(){
        return $this-> BelongsToMany(Category::class);
    }
}