<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'item_id'=>1,
            'um_id' =>1,
            'part' => 'RAW-01001-001',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'item_id'=>2,
            'um_id' =>1,
            'part' => 'RAW-01001-002',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);

        DB::table('products')->insert([
            'item_id'=>3,
            'um_id' =>1,
            'part' => 'RAW-01001-003',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'item_id'=>4,
            'um_id' =>1,
            'part' => 'RAW-01001-004',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'item_id'=>5,
            'um_id' =>1,
            'part' => 'RAW-01001-005',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
