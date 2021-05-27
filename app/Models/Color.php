<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    
    protected $filliable = ['name'];
    //mucho a muchos
    public function Sizes(){
        return $this-> BelongsToMany(Size::class);
    }
        public function Products(){
            return $this-> BelongsToMany(Product::class);


        }
}
