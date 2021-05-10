<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DistancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'character_ability_id' => 1,
            'short' => 7,
            'mile' => 5,
            'medium' => 2,
            'long' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ];

        DB::table('distances')->updateOrInsert($param);
    }
}
