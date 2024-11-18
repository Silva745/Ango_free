<?php

namespace Database\Seeders;

use App\Models\projects;
use App\Models\proposals;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{



    public function run(): void
    {
        User::factory()->count(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $user) {

                $projects = projects::factory()->create([
                    'created_by' => $user->id
                ]);

                proposals::factory()->count(random_int(4, 45))->create([
                    'project_id' => $projects->id
                ]);
            });
    }
}
