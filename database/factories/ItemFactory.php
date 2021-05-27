<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name' => $this->faker->unique()->sentence(),
           'qty' => $this->faker->sentence(),
           'price' => $this->faker->sentence(),
           'image' => $this->faker->imageUrl($width = 640, $height = 480),
           'color' => $this->faker->sentence(),
           'size' => $this->faker->sentence(),
           'order_id'=> Order::all()->random()->id
           
        ];
    }
}
