<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        
        $Subcategory = Subcategory::all()->random();
        
        $Category = $Subcategory->category;
        
        $Brands = $Category->brands->random();
        
        if($Subcategory->color){
            $quantity = null;
        }

        else{
            $quantity = 15;
        }
        
        return [
            
            'name' => $name,
            'slug' => Str::slug($name,'-'),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99,45.99,60.55,78.20]),
            'subcategory_id' =>$Subcategory->id,
            'brand_id' => $Brands->id,
            'quantity' => $quantity,
            'status' => 2

            /*return [
                'image' => 'products/' . $this->faker->image('public/storage/products', 640,480,null,false) 
            ];*/
        ];
    }
}
