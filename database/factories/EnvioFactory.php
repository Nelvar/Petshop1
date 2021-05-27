<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Department;
use App\Models\District;
use App\Models\Envio;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnvioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Envio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'order_id' => Order::all()->random()->id,
           'department_id' => Department::all()->random()->id,
           'city_id' => City::all()->random()->id,
           'district_id' => District::all()->random()->id
        ];
    }
}
