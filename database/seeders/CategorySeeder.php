<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories = [
            [

            'name' => 'comida y platos',
            'slug' => Str::slug('comida y platos'),
            'icon' => '<i class="fas fa-dog"></i>'
            ],
         
            [

            'name' => 'camas para mascotas',
            'slug' => Str::slug('camas para mascotas'),
            'icon' => '<i class="fas fa-paw"></i>'
             ],
            
             [

            'name' => 'collares para mascotas',
            'slug' => Str::slug('collares para mascotas'),
            'icon' => '<i class="fas fa-cat"></i>'
             ],
        
        
        
            ];
        

       foreach ($Categories as $Category) {
           
        
        
           $Category = Category::factory(1)->create($Category)->first();
        
        
           $brands = Brand::factory(4)->create();

           foreach ($brands as $brand) {
               $brand->Categories()->attach($Category->id);
           }
        }




        
       
    
    }
}
