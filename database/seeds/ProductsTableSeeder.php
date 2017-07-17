<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Ecom\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 12) as $index)
        {
            Product::create([
                'title' =>  $faker->sentence(5),
                'description' => $faker->paragraph(5),
                'type'  =>  $faker->sentence(1),
                'brand' =>  $faker->sentence(1),
                'amount'    =>  $faker->randomFloat($nbMaxDecimals = 2, $min = 300, $max = 20000)
            ]);
        }
    }
}
