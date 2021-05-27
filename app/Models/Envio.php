<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    
    
    use HasFactory;

    protected $guarded = ['id','create_at','updated_at'];
    
    public function  Order(){
        return $this->belongsTo(Order::class);  
    }
    
    public function  Department(){
         return $this->belongsTo(Department::class);  
        }
        
     public function  City(){
         return $this->belongsTo(City::class);  
        }
        
     public function  District(){
         return $this->belongsTo(District::class);  
        }    
        
}
