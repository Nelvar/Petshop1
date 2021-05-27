<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subcategories = [
                /*comida y platos*/ 
                [
                    'category_id' => 1,
                    'name' => 'Comida para perros',
                    'slug' => Str::slug('Comida para perros'),
                    'color' => true
                ],

                [
                    'category_id' => 1,
                    'name' => 'Comida para gatos',
                    'slug' => Str::slug('Comida para gatos'),
                    'color' => true,
                    'size' =>true
                ],

                //Camas
                [
                    'category_id' => 2,
                    'name' => 'Camas para perros',
                    'slug' => Str::slug('Camas para perros'),
                    'color' => true,
                    'size' =>true
                ],
                
                [
                    'category_id' => 2,
                    'name' => 'Camas para gatos',
                    'slug' => Str::slug('Camas para perros'),
                    'color' => true
               
                ],
               
                //collares
                [
                    'category_id' => 3,
                    'name' => 'Collares para perros',
                    'slug' => Str::slug('Collares para perros'),
                    'color' => true
                ],

                [
                    'category_id' => 3,
                    'name' => 'Collares para gatos',
                    'slug' => Str::slug('Collares para gatos'),
                    'color' => true,
                    'size' =>true
                ],
            
            
            
            ];
        
        

        foreach ($Subcategories as $Subcategories) {
           
           
            Subcategory::factory(1)->create($Subcategories);
        }
    }
}
