<?php

use Illuminate\Database\Seeder;

class TutorTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::create([
          'name'    => "John Smith",
        ])
    };
}
