<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'loc_site' => 'HIT',
            'loc_loc' => 'RSMALL',
            'name' => 'SAYUNG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('locations')->insert([
            'loc_site' => 'HIT',
            'loc_loc' => 'RMEDIUM',
            'name' => 'KUDUS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('locations')->insert([
            'loc_site' => 'HIT',
            'loc_loc' => 'RBIG',
            'name' => 'JAKARTA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
