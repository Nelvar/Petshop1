<?php

namespace Database\Factories;


use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Stmt\Const_;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
  
        
        return [
           'user_id' => User::all()->random()->id,
           'status' => $this->faker->randomElement([1,2]),
           'envio_type' => $this->faker->randomElement(['uno','dos']),
           'shipping_cost' => $this->faker->randomDigit([0,1000]),       
           'total' => $this->faker->randomDigit([0,1000]),
           
        
        ];
    }
}
