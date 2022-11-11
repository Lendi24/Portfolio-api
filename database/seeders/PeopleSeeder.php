<?php

namespace Database\Seeders;

use App\Models\AppliedContactTag;
use App\Models\AppliedPersonOnProject;
use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /********************************
     * People.                      *
     *                              *
     *  1 - fl                      *
     *  2 - sn                      *
     *  3 - jn                      *
     *  4 - e                       *
     *  5 - a                       *
     *                              *
     * @return void                 *
     *******************************/
    public function run()
    {
        $people = [
            [
                'first_name'  => 'Fabian',
                'middle_name' => '',
                'last_name'   => 'Lendic',

                'image_URL'   => 'https://placekitten.com/200/300',
            ],

            [
                'first_name'  => 'Sebastian',
                'middle_name' => '',
                'last_name'   => 'Nilsson-Stor',

                'image_URL'   => 'https://placekitten.com/200/300',
            ],

            [
                'first_name'  => 'Jonathan',
                'middle_name' => '',
                'last_name'   => 'Nilsson',

                'image_URL'   => 'https://placekitten.com/200/300',
            ],

            [
                'first_name'  => 'Emanuel',
                'middle_name' => '',
                'last_name'   => '',

                'image_URL'   => 'https://placekitten.com/200/300',
            ],

            [
                'first_name'  => 'Ali',
                'middle_name' => '',
                'last_name'   => '',

                'image_URL'   => 'https://placekitten.com/200/300',
            ],
        ];

        $people_contacts = [
            [
                'person_id'     => '1', //Fabian Lendic
                'contact_id'    => '1', //E-mail

                'target'        => 'mailto:lendic24@hotmail.com',
                'information'   => 'lendic24@hotmail.com',
            ],
            ////
            [
                'person_id'     => '1', //Fabian Lendic
                'contact_id'    => '4', //Website

                'target'        => 'https://fabian.lendic.xyz/',
                'information'   => '',
            ],

            [
                'person_id'     => '1', //Fabian Lendic
                'contact_id'    => '5', //GitHub

                'target'        => 'https://github.com/Lendi24',
                'information'   => 'Lendi24',
            ],

            [
                'person_id'     => '1', //Fabian Lendic
                'contact_id'    => '6', //LinkedIn

                'target'        => 'https://se.linkedin.com/in/fabian-lendic-a0b42220a',
                'information'   => 'Fabian Lendic',
            ],

            //{}//

            [
                'person_id'     => '2', //Sebastian Nilsson-Stor
                'contact_id'    => '1', //E-mail

                'target'        => 'mailto:sebastian.nilssonstor@gmail.com',
                'information'   => 'sebastian.nilssonstor@gmail.com',
            ],
            ////
            [
                'person_id'     => '2', //Sebastian Nilsson-Stor
                'contact_id'    => '5', //GitHub

                'target'        => 'https://github.com/Fojii',
                'information'   => 'Fojii',
            ],

            //{}//

            [
                'person_id'     => '3', //Jonathan Nilsson
                'contact_id'    => '1', //E-mail

                'target'        => 'mailto:jonathanbnilsson@gmail.com',
                'information'   => 'jonathanbnilsson@gmail.com',
            ],
            ////
            [
                'person_id'     => '3', //Jonathan Nilsson
                'contact_id'    => '4', //Website

                'target'        => 'https://jonathan.lund-te4.se/',
                'information'   => '',
            ],
        ];


        $peopleOnProjects = [
            [
                'project_id'    =>  '1', //Butterfly
                'person_id'     =>  '1',
                'order'         =>  '1',
            ],

            [
                'project_id'    =>  '1', //Butterfly
                'person_id'     =>  '2',
                'order'         =>  '2',
            ],



            [
                'project_id'    =>  '2', //Portfolio
                'person_id'     =>  '1',
                'order'         =>  '3',
            ],



            [
                'project_id'    =>  '3', //UnSite
                'person_id'     =>  '1',
                'order'         =>  '1',
            ],

            [
                'project_id'    =>  '3', //UnSite
                'person_id'     =>  '4', //E-mannen
                'order'         =>  '2',
            ],

            [
                'project_id'    =>  '3', //UnSite
                'person_id'     =>  '5', //Ali
                'order'         =>  '3',
            ],



            [
                'project_id'    =>  '4', //Imitar
                'person_id'     =>  '1',
                'order'         =>  '2',
            ],

            [
                'project_id'    =>  '4', //Imitar
                'person_id'     =>  '3', //Jonathan
                'order'         =>  '3',
            ],

        ];

        foreach ($people as $key => $value) {
            Person::create($value);
        }

        foreach ($people_contacts as $key => $value) {
            AppliedContactTag::create($value);
        }

        foreach ($peopleOnProjects as $key => $value) {
            # code...
            AppliedPersonOnProject::create($value);
        }
    }
}
