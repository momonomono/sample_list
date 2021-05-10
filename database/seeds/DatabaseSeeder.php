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
        // $this->call(UsersTableSeeder::class);
        $this->call(CharactersTableSeeder::class);
        $this->call(CharacterAbilitiesTableSeeder::class);
        $this->call(AbilitiesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(DistancesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
    }
}
