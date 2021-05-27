<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model


{
    
    use HasFactory;

    protected $guarded = ['id','create_at','updated_at'];


    //uno a muchos
public function Product(){
    return $this->hasMany(Product::class);
}
//inverso
public function Category(){
    return $this->belongsTo(Category::class);
}
public function Image(){
    return $this->morphMany(Image::class, 'Imageable');
 }

}
