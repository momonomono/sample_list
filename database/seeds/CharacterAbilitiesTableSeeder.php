<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CharacterAbilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'character_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ];

        Db::table('character_abilities')->updateOrInsert($param);
    }
}
