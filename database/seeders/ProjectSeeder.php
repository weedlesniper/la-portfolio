<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::updateOrCreate(
            ['slug' => 'my-app'],
            [
                'title'       => 'My App',
                'summary'     => 'A small project to learn Laravel 12.',
                'cover_image' => 'projects/my-app-cover.gif',  // after you place/copy it
                'gallery'     => ['projects/my-app-1.png','projects/my-app-2.png'],
                'tech_stack'  => ['Laravel','Livewire','Tailwind'],
                'repo_url'    => 'https://github.com/you/my-app',
                'live_url'    => null,
            ]
        );
    }
}
