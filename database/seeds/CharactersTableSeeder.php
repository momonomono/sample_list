<?php

use Illuminate\Database\Seeder;

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
            'image' => 'img/tokaiteio.jpg'
        ];

        DB::table('characters')->updateOrInsert($param);
    }
}
