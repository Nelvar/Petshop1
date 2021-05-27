<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('Subcategory',function(Builder $query)
        {

            $query->where('color',true) 
                    ->where('size',true);
           
        })->get();
        
        
        $Sizes = ['Pequeño' ,'Mediano' ,'Grande'];         
                    
        foreach ($products as  $product){

            foreach ($Sizes as $Size) {
                $product->Sizes()->create([
                    'name' => $Size
                ]);
            }
            
            
        }
    }
}
