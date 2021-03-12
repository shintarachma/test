<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            'location_id' => 1,
            'product_id' => 1,
            'um' =>'EA',
            'saldo' => 10,
            'received_date' => Carbon::parse('2021-01-01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('stocks')->insert([
            'location_id' => 2,
            'product_id' => 2,
            'um' =>'EA',
            'saldo' => 10,
            'received_date' => Carbon::parse('2021-02-01'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('stocks')->insert([
            'location_id' => 1,
            'product_id' => 3,
            'um' =>'EA',
            'saldo' => 15,
            'received_date' => Carbon::parse('2021-02-02'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('stocks')->insert([
            'location_id' => 3,
            'product_id' => 2,
            'um' =>'EA',
            'saldo' => 20,
            'received_date' => Carbon::parse('2021-02-03'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
