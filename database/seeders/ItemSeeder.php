<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$Item =*/ Item::factory(6)->create();

        /*foreach ($Item as $Item) {
           Image::factory(1)->create([
               'imageable_id' => $Item->id,
               'imageable_type' => Item::class
           ]);
        }*/
    }
}
