<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use App\Models\City;
use App\Models\Color;
use App\Models\Department;
use App\Models\District;
use App\Models\Envio;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        Storage::deleteDirectory('Category');
        Storage::deleteDirectory('Products');
        Storage::deleteDirectory('Subcategories');
        
        Storage::makeDirectory('Category');
        Storage::makeDirectory('Subcategories'); 
        Storage::makeDirectory('Products');
      
        
      
        $this->call(UserSeeder::class);
        
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ColorSizeSeeder::class);

        //$this->call(DepartmentSeeder::class);
        
    }
}
