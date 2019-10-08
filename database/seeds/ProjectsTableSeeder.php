<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Project::truncate();

        \App\Project::create([
            'name' => 'Propane Stove',
            'description' => 'Plumb gas, install stove pipe and roof piece',
            'estimate' => 3000,
            'priority' => 1,
            'user_id' => 2,
            'project_type_id' => 1
        ]);
        \App\Project::create([
            'name' => 'Studio Kitchen',
            'description' => 'Finish kitchen sink',
            'estimate' => 1500,
            'priority' => 2,
            'user_id' => 2,
            'project_type_id' => 4
        ]);
        \App\Project::create([
            'name' => 'Rain Gutter',
            'description' => 'On studio',
            'estimate' => 1200,
            'priority' => 2,
            'user_id' => 2,
            'project_type_id' => 5
        ]);
        \App\Project::create([
            'name' => 'Drip System',
            'description' => 'Test, fix and install new',
            'estimate' => 300,
            'priority' => 3,
            'user_id' => 1,
            'project_type_id' => 3
        ]);
        \App\Project::create([
            'name' => 'Paint Door',
            'description' => 'With fascia color',
            'priority' => 3,
            'user_id' => 1,
            'project_type_id' => 2
        ]);
    }
}
