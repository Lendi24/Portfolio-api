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
                'image_URL'     => "https://placekitten.com/600/500",
                'writeup_URL'   => "",
            ],

            [
                'title'         => "Portfolio Website",
                'description'   => "This website! Do you want to know how it's built?",
                'image_URL'     => "https://placekitten.com/500/600",
                'writeup_URL'   => "",
            ],

            [
                'title'         => "UnSite",
                'description'   => "Using the latest in user hostile dessign",
                'image_URL'     => "https://placekitten.com/600/300",
                'writeup_URL'   => "",
            ],

            [
                'title'         => "imitari",
                'description'   => "Image editing software on the web",
                'image_URL'     => "https://placekitten.com/800/400",
                'writeup_URL'   => "",
            ],

        ];

        foreach ($projects as $key => $value) {
            Project::create($value);
        }

    }
}
