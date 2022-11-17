<?php

namespace App\Http\Controllers;

use App\Models\AppliedPersonOnProject;
use App\Models\AppliedPlattformTag;
use App\Models\ContactTag;
use App\Models\LanguageTag;
use App\Models\PlattformTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function showLanguage($id)   {return LanguageTag::find($id);}
    public function showPlattform($id)  {return PlattformTag::find($id);}
    public function showContact($id)    {return ContactTag::find($id);}

    public function indexLanguage()   {return LanguageTag::all();}
    public function indexPlattform()  {return PlattformTag::all();}
    public function indexContact()    {return ContactTag::all();}



    public function linkPerson(Request $request)        {

        $request->validate([
            'project_id'      => 'required',
            'person_id'       => 'required',
        ]);


        //return ContactTag::all();
        return AppliedPersonOnProject::create([
            'project_id'        => $request->project_id,
            'person_id'         => $request->person_id, 
            'order'             => "1", 
        ]);
    }

    public function unlinkPerson(Request $request)      {
        //return ContactTag::all();
        /*
        return AppliedPersonOnProject::create([
            'first_name'        => $request->first_name,
            'middle_name'       => $request->middle_name, 
        ]);*/
    }

    public function linkPlattform(Request $request)     {
        $request->validate([
            'project_id'        => 'required',
            'plattform_id'      => 'required',
            'target'            => 'required',
        ]);

        //return ContactTag::all();
        return AppliedPlattformTag::create([
            'project_id'        => $request->project_id,
            'plattform_id'      => $request->plattform_id, 
            'target'            => $request->target,    
        ]);
    }

    public function unlinkPlattform(Request $request)   {
        //return ContactTag::all();
        /*
        return AppliedPersonOnProject::create([
            'first_name'        => $request->first_name,
            'middle_name'       => $request->middle_name, 
            'last_name'         => $request->last_name,    
        ]);*/
    }
}
