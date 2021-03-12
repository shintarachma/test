<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(UMSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StockSeeder::class);
        // $this->call(TransactionSeeder::class);

    }
}
