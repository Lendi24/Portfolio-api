<?php

namespace Database\Seeders;

use App\Models\PlattformTag;
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

            [
                'name'   => 'Source',
                'device' => 'source',
                'icon'   => 'mdi-git',
            ],


            
            [
                'name'   => 'Windows',
                'device' => 'pc',
                'icon'   => 'mdi-microsoft-windows',
            ],

            [
                'name'   => 'MacOS',
                'device' => 'pc',
                'icon'   => 'mdi-apple-finder',
            ],

            [
                'name'   => 'GNU/Linux',
                'device' => 'pc',
                'icon'   => 'mdi-penguin',
            ],



            [
                'name'   => 'Android',
                'device' => 'mobile',
                'icon'   => 'mdi-android',
            ],

            [
                'name'   => 'iOS',
                'device' => 'mobile',
                'icon'   => 'mdi-apple-ios',
            ],


            
            [
                'name'   => 'Web',
                'device' => 'web',
                'icon'   => 'mdi-web',
            ],
        ];
        
        foreach ($plattformTags as $key => $value) {
            PlattformTag::create($value);
        }
    }
}
