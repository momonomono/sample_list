<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AbilitiesTableSeeder extends Seeder
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
            'speed' => 743,
            'stamina' => 683,
            'power' => 722,
            'guts' => 970,
            'wise' => 656,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ];

        DB::table('abilities')->updateOrInsert($param);
    }
}
