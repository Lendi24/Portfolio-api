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
                'name'   => 'E-mail',
                'type'   => 'text',
                'icon'   => 'mdi-email',
            ],

            [
                'name'   => 'Phone',
                'type'   => 'text',
                'icon'   => 'mdi-phone',
            ],

            [
                'name'   => 'Discord',
                'type'   => 'text',
                'icon'   => 'mdi-discord',
            ],



            [
                'name'   => 'LinkedIn',
                'type'   => 'button',
                'icon'   => 'mdi-linkedin',
            ],

            [
                'name'   => 'Twitter',
                'type'   => 'button',
                'icon'   => 'mdi-twitter',
            ],

            [
                'name'   => 'GitHub',
                'type'   => 'button',
                'icon'   => 'mdi-github',
            ],
        ];
        
        foreach ($contactTags as $key => $value) {
            ContactTag::create($value);
        }
    }
}
