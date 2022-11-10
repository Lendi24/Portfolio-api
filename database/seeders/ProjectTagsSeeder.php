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
                "plattfrom_tag_id"  => "1",//Source
                "target"            => "https://",
            ],


            [
                "project_id"        => "1",//Butterfly
                "plattfrom_tag_id"  => "2",//Windows
                "target"            => "https://",
            ],

            [
                "project_id"        => "1",//Butterfly
                "plattfrom_tag_id"  => "3",//Mac
                "target"            => "https://",
            ],

            [
                "project_id"        => "1",//Butterfly
                "plattfrom_tag_id"  => "4",//Linux
                "target"            => "https://",
            ],


            [
                "project_id"        => "1",//Butterfly
                "plattfrom_tag_id"  => "5",//Android
                "target"            => "https://",
            ],

            /**/

            [
                "project_id"        => "2",//Portfolio
                "plattfrom_tag_id"  => "1",//Source
                "target"            => "https://",
            ],

            /**/

            [
                "project_id"        => "3",//UnSite
                "plattfrom_tag_id"  => "1",//Source
                "target"            => "https://",
            ],

            [
                "project_id"        => "3",//UnSite
                "plattfrom_tag_id"  => "7",//Web
                "target"            => "https://",
            ],

            /**/

            [
                "project_id"        => "4",//Imitari
                "plattfrom_tag_id"  => "1",//Source
                "target"            => "https://",
            ],

            [
                "project_id"        => "4",//Imitari
                "plattfrom_tag_id"  => "7",//Web
                "target"            => "https://",
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
