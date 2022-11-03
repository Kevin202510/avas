<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
                'category_id'   => 1,
                'code'  => 'sisigsilog', 
                'name'  => 'Sisig Silog',
                'description'  => 'Full Package Sizzling sisig in the sizzling plate with rice',
                'price'  => 140,
            ],
            [
                'category_id'   => 1,
                'code'  => 'hotsilog', 
                'name'  => 'Hot Silog',
                'description'  => 'Full Package Hotdog Sinangag',
                'price'  => 50,
            ],
            [
                'category_id'   => 3,
                'code'  => 'coke', 
                'name'  => 'Coke',
                'description'  => 'Coke Mismo',
                'price'  => 20,
            ]
        ]);
    }
}
