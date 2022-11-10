<?php

namespace Database\Seeders;

use App\Models\ContactTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactTags = [
            [
                'name'   => 'E-mail',//1
                'type'   => 'text',
                'icon'   => 'mdi-email',
            ],

            [
                'name'   => 'Phone',//2
                'type'   => 'text',
                'icon'   => 'mdi-phone',
            ],

            [
                'name'   => 'Discord',//3
                'type'   => 'text',
                'icon'   => 'mdi-discord',
            ],



            [
                'name'   => 'Website',//4
                'type'   => 'button',
                'icon'   => 'mdi-web',
            ],

            [
                'name'   => 'GitHub',//5
                'type'   => 'button',
                'icon'   => 'mdi-github',
            ],

            [
                'name'   => 'LinkedIn',//6
                'type'   => 'button',
                'icon'   => 'mdi-linkedin',
            ],

            [
                'name'   => 'YouTube',//7
                'type'   => 'button',
                'icon'   => '',
            ],

            [
                'name'   => 'Twitter',//8
                'type'   => 'button',
                'icon'   => '',
            ],

        ];
        
        foreach ($contactTags as $key => $value) {
            ContactTag::create($value);
        }
    }
}
