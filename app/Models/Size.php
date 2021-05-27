<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    
    
    use HasFactory;

    protected $filliable = ['name', 'product_id'];

    
 //muchos a muchos
 public function Colors(){
    return $this-> BelongsToMany(Color::class);
    }
//relacion uno a muchos inversa

public function Product(){
    return $this->BelongsTo(Product::class);
}

}