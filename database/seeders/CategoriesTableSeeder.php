<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 'name' => 'Beverages'],
            [ 'name' => 'Bread / Bakery'],
            [ 'name' => 'Canned / Jarred Goods'],
            [ 'name' => 'Dairy'],
            [ 'name' => 'Dry / Baking Goods'],
            [ 'name' => 'Frozen Food'],
            [ 'name' => 'Meat'],
            [ 'name' => 'Produce'],
            [ 'name' => 'Cleaners'],
            [ 'name' => 'Paper Goods'],
            [ 'name' => 'Personal Care'],
            [ 'name' => 'Vegetables'],
            [ 'name' => 'Fruit'],
            [ 'name' => 'Other'],
        ]);
    }
}