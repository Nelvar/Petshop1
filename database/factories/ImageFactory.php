<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'url' => 'Products/' . $this->faker->image('public/storage/Products',650,480,null,false),
            
            /*'url' => 'Category/' - $this->faker->image('public/storage/category', 650,480,null,true),
            'url' => 'Subcategory/' - $this->faker->image('public/storage/Item', 650,480,null,true)*/
        ];
        
    }
}
