<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            [
                'user_id'   => 3,
                'product_id'  =>1,
                'quantity'  => 2,
            ],
            [
                'user_id'   => 3,
                'product_id'  =>2,
                'quantity'  => 2,
            ]
        ]);
    }
}
