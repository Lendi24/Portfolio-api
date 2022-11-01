<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlattformTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plattformTags = [ 

            //Project type

            [   
                'name' =>  "Web",
                'icon' =>  "mdi-web",
                'color' => "#0000ff",
            ],

            [
                'name' =>  "Interactive media",
                'icon' =>  "mdi-controller",
                'color' => "#ff0000",
            ],



            //Chategory

            [
                'name' => "Back-end",
                'icon' => "mdi-server",
                'color' => "",
            ],

            [
                'name' => "Front-end",
                'icon' => "mdi-laptop",
                'color' => "",
            ],



            //Frameworks & Envoroment

            [
                'name' => "Laravel",
                'icon' => "mdi-laravel",
                'color' => "",
            ],

            [
                'name' => "TypeScript",
                'icon' => "mdi-language-typescript",
                'color' => "",
            ],

            [
                'name' => "Bulma",
                'icon' => "mdi-bulma",
                'color' => "",
            ],

            [
                'name' => "Tailwind",
                'icon' => "mdi-tailwind",
                'color' => "",
            ],

            [
                'name' => "Unity",
                'icon' => "mdi-unity",
                'color' => "",
            ],

            [
                'name' => "Unreal",
                'icon' => "mdi-unreal",
                'color' => "",
            ],



            //Languages

            [
                'name' => "Lua",
                'icon' => "mdi-language-lua",
                'color' => "",
            ],

            [
                'name' => "Python",
                'icon' => "mdi-language-python",
                'color' => "",
            ],

            [
                'name' => "Java",
                'icon' => "mdi-language-java",
                'color' => "",
            ],

            [
                'name' => "JavaScript",
                'icon' => "mdi-language-javascript",
                'color' => "",
            ],

            [
                'name' => "C#",
                'icon' => "mdi-language-csharp",
                'color' => "",
            ],

            [
                'name' => "C++",
                'icon' => "mdi-language-cpp",
                'color' => "",
            ],

            [
                'name' => "C",
                'icon' => "mdi-language-csharp",
                'color' => "",
            ],

            [
                'name' => "HTML",
                'icon' => "mdi-language-html5",
                'color' => "",
            ],

            [
                'name' => "CSS",
                'icon' => "mdi-language-css3",
                'color' => "",
            ],

        ]; 
    }
}
