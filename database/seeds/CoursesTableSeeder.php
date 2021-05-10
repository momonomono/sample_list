<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CoursesTableSeeder extends Seeder
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
            'grass' => 2,
            'dirt' => 8,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ];

        DB::table('courses')->updateOrInsert($param);
    }
}
