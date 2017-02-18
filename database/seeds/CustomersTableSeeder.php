<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Customer', 50)->create([
            'reason_id' => 1,
            'need_timeframe' => '3 weeks'
        ]);
    }
}
