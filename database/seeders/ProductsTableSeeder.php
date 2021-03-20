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
        DB::table('product')->insert([
            [
                'name' => 'coffee',
                'category_id' => 1
            ],
            [
                'name' => 'tea',
                'category_id' => 1
            ],
            [
                'name' => 'sandwich loaves',
                'category_id' => 2
            ],
            [
                'name' => 'dinner rolls',
                'category_id' => 2
            ],
            [
                'name' => 'sandwich loaves',
                'category_id' => 2
            ],
            [
                'name' => 'tortillas',
                'category_id' => 2
            ],
            [
                'name' => 'bagels',
                'category_id' => 2
            ],
            [
                'name' => 'bagels',
                'category_id' => 3
            ],
            [
                'name' => 'bagels',
                'category_id' => 3
            ],
            [
                'name' => 'bagels',
                'category_id' => 3
            ],
        ]);
    }
}