<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('customers')->truncate();
        // $this->call(CustomersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ReasonsTableSeeder::class);
    }
}
