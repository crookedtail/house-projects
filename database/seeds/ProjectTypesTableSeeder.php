<?php

use Illuminate\Database\Seeder;

class ProjectTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ProjectType::truncate();

        \App\ProjectType::create(['name' => 'House']);
        \App\ProjectType::create(['name' => 'Garage']);
        \App\ProjectType::create(['name' => 'Landscaping']);
        \App\ProjectType::create(['name' => 'Studio']);
        \App\ProjectType::create(['name' => 'Grounds']);
    }
}
