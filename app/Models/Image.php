<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
 
  use HasFactory;
  protected $filliable = ['url','imageable_id','imageable_type'];
  
  
    public function Imageable(){
        return $this->morphTo();

  }

}
