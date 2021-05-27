<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Size;
use Illuminate\Database\Seeder;

class ColorSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Sizes = Size::whereHas ('Product', function(Builder $query)
            {

                $query->where('color',true) 
                        ->where('size',true);
               
            })->get();
    
         foreach ($Sizes as $Size){
             
            $Size->colors()->attach([
                1  => [
                    'quantity' => 10
                ],
                2 => [
                    'quantity' =>10
                ],
                3 => [
                    'quantity' =>10
                ],
                4 => [
                    'quantity' =>10
                ],
             ]);
            }
    }
}
