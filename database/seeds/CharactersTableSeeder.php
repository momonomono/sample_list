<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'トウカイテイオー',
            'image' => 'img/tokaiteio.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ];

        DB::table('characters')->updateOrInsert($param);
    }
}
