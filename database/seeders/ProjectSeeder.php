<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [

            [
                'title'         => "The Butterfly Project",
                'description'   => "Gamified learning tool for biology",
                'image_URL'     => "/api/v1/projects/1/img/thumbnail",
                'writeup_URL'   => "",
            ],

            [
                'title'         => "Portfolio Website",
                'description'   => "This website! Do you want to know how it's built?",
                'image_URL'     => "/api/v1/projects/2/img/thumbnail",
                'writeup_URL'   => "",
            ],

            [
                'title'         => "UnSite",
                'description'   => "Using the latest in user hostile dessign",
                'image_URL'     => "/api/v1/projects/3/img/thumbnail",
                'writeup_URL'   => "",
            ],

            [
                'title'         => "imitari",
                'description'   => "Image editing software on the web",
                'image_URL'     => "/api/v1/projects/4/img/thumbnail",
                'writeup_URL'   => "",
            ],

        ];

        foreach ($projects as $key => $value) {
            Project::create($value);
        }

    }
}
