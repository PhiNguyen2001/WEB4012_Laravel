<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use \Illuminate\Support\Facades\DB;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        
        for($i = 0; $i < 20; $i++){
            $data = [
                'name' => $faker->name,
                'price' => $faker->randomNumber(1,10),
                'quantity' => $faker->randomNumber(1,1000),
                'category_id' => $faker->randomNumber(1,25),
                'image' => $faker -> image,
            ];

            DB::table('products')->insert($data);
        }
    }
}
