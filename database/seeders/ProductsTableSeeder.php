<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product' => 'coffee',
                'category_id' => 1
            ],
            [
                'product' => 'tea',
                'category_id' => 1
            ],
            [
                'product' => 'sandwich loaves',
                'category_id' => 2
            ],
            [
                'product' => 'dinner rolls',
                'category_id' => 2
            ],
            [
                'product' => 'sandwich loaves',
                'category_id' => 2
            ],
            [
                'product' => 'tortillas',
                'category_id' => 2
            ],
        ]);
    }
}