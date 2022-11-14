<?php

namespace App\Http\Controllers;

use App\Models\AppliedContactTag;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Project;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Person::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'        => 'required',
        ]);

        return Person::create([
            'first_name'        => $request->first_name,
            'middle_name'       => $request->middle_name, 
            'last_name'         => $request->last_name,
    
            'image_URL'         => "filler",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Person::find($id);

        $appliedContactTags  = (AppliedContactTag::select('contact_id','target','information')->where('person_id','=',$id) -> get());        

        $person = (Person::find($id));

        return [
            'personData' => $person,
            'tags' => [
                'contactTags' => $appliedContactTags,
            ],
        ];

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $object = Person::find($id);
        $object->update($request->all());
        return $object;
    }


    /**
     * Looks for a object given its name.
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($q)
    {
        return  Person::where('first_name', 'like', '%'.$q.'%')
            ->orWhere('last_name', 'like', '%'.$q.'%')
            ->orWhere('middle_name', 'like', '%'.$q.'%')
            ->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Person::destroy($id);
    }
}
