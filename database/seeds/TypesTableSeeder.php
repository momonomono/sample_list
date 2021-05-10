<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TypesTableSeeder extends Seeder
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
            'nige' => 4,
            'senkou' => 2,
            'sasi' => 3,
            'oikomi' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ];

        DB::table('types')->updateOrInsert($param);
    }
}
