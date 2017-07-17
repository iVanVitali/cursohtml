<?php

use Illuminate\Database\Seeder;
use Ecom\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $this->call(UsersTableSeeder::class);
        $this->call('ProductsTableSeeder');
    }
}
