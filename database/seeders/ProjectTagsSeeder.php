<?php

namespace Database\Seeders;

use App\Models\AppliedLanguageTag;
use App\Models\AppliedPlattformTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTagsSeeder extends Seeder
{
    /********************************
     * Run the database seeds.      *
     *                              *
     *  1 - Source                  *
     *                              *
     *  2 - Windows                 *
     *  3 - Mac                     *
     *  4 - Linux                   *
     *                              *
     *  5 - Android                 *
     *  6 - IOS                     *
     *                              *
     *  7 - Web                     *
     *                              *
     * @return void                 *
     *******************************/
    public function run()
    {
        $plattformTags = [
            
            [
                "project_id"        => "1",//Butterfly
                "plattform_tag_id"  => "1",//Source
                "target"            => "https://github.com/Lendi24/UnSite",
            ],


            [
                "project_id"        => "1",//Butterfly
                "plattform_tag_id"  => "2",//Windows
                "target"            => "https://github.com/Lendi24/TheButterflyProject/releases/download/Alpha_0.3.0/Windows-TheButterflyProject_0.3.0.zip",
            ],

            [
                "project_id"        => "1",//Butterfly
                "plattform_tag_id"  => "3",//Mac
                "target"            => "https://github.com/Lendi24/TheButterflyProject/releases/download/Alpha_0.3.0/Mac-TheButterflyProject_0.3.0.tar",
            ],

            [
                "project_id"        => "1",//Butterfly
                "plattform_tag_id"  => "4",//Linux
                "target"            => "https://github.com/Lendi24/TheButterflyProject/releases/download/Alpha_0.3.0/Linux-TheButterflyProject_0.3.0.tar",
            ],


            [
                "project_id"        => "1",//Butterfly
                "plattform_tag_id"  => "5",//Android
                "target"            => "https://github.com/Lendi24/TheButterflyProject/releases/download/Alpha_0.3.0/Android-TheButterflyProject_0.3.0.apk",
            ],

            /**/

            [
                "project_id"        => "2",//Portfolio
                "plattform_tag_id"  => "1",//Source
                "target"            => "https://github.com/Lendi24/Portfolio",
            ],

            /**/

            [
                "project_id"        => "3",//UnSite
                "plattform_tag_id"  => "1",//Source
                "target"            => "https://github.com/Lendi24/UnSite",
            ],

            [
                "project_id"        => "3",//UnSite
                "plattform_tag_id"  => "7",//Web
                "target"            => "https://unsite.lendic.xyz/#/",
            ],

            /**/

            [
                "project_id"        => "4",//Imitari
                "plattform_tag_id"  => "1",//Source
                "target"            => "https://github.com/Lendi24/Imitari",
            ],

            [
                "project_id"        => "4",//Imitari
                "plattform_tag_id"  => "7",//Web
                "target"            => "https://imitari.lendic.xyz/public/",
            ],
        ];

        $languageTags = [

        ];
    

        foreach ($plattformTags as $key => $value) {
            AppliedPlattformTag::create($value);
        }
        foreach ($languageTags as $key => $value) {
            AppliedLanguageTag::create($value);
        }
    }
}
