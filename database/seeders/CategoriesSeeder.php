<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'   => 1, 
                'name'  => 'meals',
            ],
            [
                'id'   => 2,
                'name' => 'desert',
            ],
            [
                'id'   => 3,
                'name' => 'drinks',
            ]
        ]);
    }
}
