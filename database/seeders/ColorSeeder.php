<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;


class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Colors = ['white','blue','red','black'];
        

       
       foreach ($Colors as $Color) {
            Color::create([
                'name' => $Color
            ]);
       }
       
    }
}
