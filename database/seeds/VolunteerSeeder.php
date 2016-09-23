<?php

use Illuminate\Database\Seeder;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteers')->truncate();
        factory(App\Volunteer::class, 1000)->create();
    }
}
